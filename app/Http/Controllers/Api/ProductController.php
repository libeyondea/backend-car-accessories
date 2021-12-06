<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductCollection;
use App\Http\Resources\Api\ProductResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ApiResponser;

class ProductController extends Controller
{
    use ApiResponser;

    public function index(Request $request)
    {
        $request->brands = json_decode($request->brands, true);

        $page = request()->get('page', 1);
        $pageSize = request()->get('page_size', 10);
        $sortDirection = $request->get('sort_direction', 'desc');

        $productQuery = new Product;

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

        if ($request->has('category')) {
            if ($request->category) {
                $productQuery = $productQuery->where('category_id', Category::where('slug', $request->category)->firstOrFail()->id);
            }
        }

        if ($request->has('brands')) {
            if ($request->brands) {
                $productQuery = $productQuery->whereIn('brand_id', Brand::select('id')->whereIn('slug', $request->brands)->get());
            }
        }

        $productsTotal = $productQuery->get()->count();

        $products = new ProductCollection(
            $productQuery
                ->orderBy('created_at', 'desc')
                ->skip(($page - 1) * $pageSize)->limit($pageSize)
                ->get()
        );

        return $this->respondSuccessWithPagination(
            $products,
            $productsTotal
        );
    }

    public function show($id)
    {
        $productQuery = Product::where('slug', $id);

        $product = new ProductResource($productQuery->firstOrFail());

        return $this->respondSuccess($product);
    }
}
