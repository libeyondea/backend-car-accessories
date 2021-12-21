<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Traits\ApiResponser;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $page = request()->get('page', 1);
        $pageSize = request()->get('page_size', 10);
        $brandQuery = new Brand;
        $brandsTotal = $brandQuery->get()->count();

        $brands =
            $brandQuery
            ->orderBy('created_at', 'desc')
            ->skip(($page - 1) * $pageSize)->limit($pageSize)
            ->get();
        return $this->respondSuccessWithPagination(
            $brands,
            $brandsTotal
        );
    }

    public function store(Request $request)
    {
        $createBrand = new Brand();
        $createBrand->name = $request->name;

        if ($request->slug) {
            $slug = Str::slug($request->slug, '-');
        } else {
            $slug = Str::slug($request->name, '-');
        }
        if (Brand::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::lower(Str::random(4));
        }
        $createBrand->slug = $slug;

        $createBrand->save();
        $brand = Brand::where('id', $createBrand->id)->firstOrFail();
        return $this->respondSuccess($brand);
    }

    public function show($id)
    {
        $brandQuery = Brand::where('id', $id);
        $brand = $brandQuery->firstOrFail();
        return $this->respondSuccess($brand);
    }

    public function update(Request $request, $id)
    {
        $brandQuery = Brand::where('id', $id);
        $brand = $brandQuery->firstOrFail();
        $brand->name = $request->name;

        if ($request->slug) {
            $slug = Str::slug($request->slug, '-');
        } else {
            $slug = Str::slug($request->name, '-');
        }
        if (
            Brand::where('slug', $slug)
            ->where('id', '!=', $id)
            ->exists()
        ) {
            $slug = $slug . '-' . Str::lower(Str::random(4));
        }
        $brand->slug = $slug;

        $brand->save();
        return $this->respondSuccess($brand);
    }

    public function destroy($id)
    {
        $brandQuery = Brand::where('id', $id);
        $brand = $brandQuery->firstOrFail();
        $brand->delete();
        return $this->respondSuccess($brand);
    }
}
