<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Http\Resources\Api\ProductCollection;
use App\Http\Resources\Api\ProductResource;
use App\Models\Product;
use App\Models\ProductImage;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $pageSize = $request->get('page_size', 10);
        $sortDirection = $request->get('sort_direction', 'desc');

        $productQuery = new Product();

        if ($request->has('q')) {
            if ($request->q) {
                $productQuery = $productQuery
                    ->where('name', 'LIKE', '%' . $request->q . '%')
                    ->orWhere('slug', 'LIKE', '%' . $request->q . '%');
            }
        }

        if ($request->has('sort_by')) {
            if ($request->sort_by) {
                $productQuery = $productQuery->orderBy($request->sort_by, $sortDirection);
            }
        }

        $productsTotal = $productQuery->get()->count();

        $products =  new ProductCollection($productQuery
            ->orderBy('created_at', 'desc')
            ->skip(($page - 1) * $pageSize)->limit($pageSize)
            ->get());

        return $this->respondSuccessWithPagination(
            $products,
            $productsTotal
        );
    }

    public function store(StoreProductRequest $request)
    {
        $createProduct = new Product();
        $createProduct->name = $request->name;
        $createProduct->details = $request->details;
        $createProduct->price = $request->price;
        $createProduct->discount = $request->discount;
        $createProduct->quantity = $request->quantity;
        $createProduct->category_id = $request->category;
        $createProduct->brand_id = $request->brand;

        if ($request->slug) {
            $slug = Str::slug($request->slug, '-');
        } else {
            $slug = Str::slug($request->name, '-');
        }
        if (Product::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::lower(Str::random(4));
        }
        $createProduct->slug = $slug;

        if ($createProduct->save()) {
            if ($request->hasfile('image')) {
                $imageName = time() . '.' . $request->file('image')->extension();
                Storage::disk('img')->put($imageName, file_get_contents($request->file('image')));
                $productImage = new ProductImage();
                $productImage->product_id = $createProduct->id;
                $productImage->name = $imageName;
                $productImage->save();
            }
        }

        $product = Product::where('id', $createProduct->id)->firstOrFail();

        return $this->respondSuccess($product);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;

        if ($request->slug) {
            $slug = Str::slug($request->slug, '-');
        } else {
            $slug = Str::slug($request->name, '-');
        }
        if (Product::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::lower(Str::random(4));
        }
        $product->slug = $slug;

        if ($product->save()) {
            if ($request->hasfile('image')) {
                $productImage = ProductImage::where('product_id', $product->id)->first();
                if (Storage::disk('img')->exists($productImage->name)) {
                    Storage::disk('img')->delete($productImage->name);
                }

                $imageName = time() . '.' . $request->file('image')->extension();
                Storage::disk('img')->put($imageName, file_get_contents($request->file('image')));

                $productImage->product_id = $product->id;
                $productImage->name = $imageName;
                $productImage->save();
            }
        }

        $product = Product::where('id', $product->id)->firstOrFail();

        return $this->respondSuccess($product);
    }

    public function show($id)
    {
        $productQuery = Product::where('id', $id);

        $product = new ProductResource($productQuery->firstOrFail());

        return $this->respondSuccess($product);
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();
        return $this->respondSuccess($product);
    }
}
