<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ApiResponser;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $page = request()->get('page', 1);
        $pageSize = request()->get('page_size', 10);

        $categoryQuery = new Category;

        $categoriesTotal = $categoryQuery->get()->count();

        $categories =
            $categoryQuery
            ->orderBy('created_at', 'desc')
            ->skip(($page - 1) * $pageSize)->limit($pageSize)
            ->get();

        return $this->respondSuccessWithPagination(
            $categories,
            $categoriesTotal
        );
    }

    public function store(Request $request)
    {
        $createCategory = new Category();
        $createCategory->name = $request->name;

        if ($request->slug) {
            $slug = Str::slug($request->slug, '-');
        } else {
            $slug = Str::slug($request->name, '-');
        }
        if (Category::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::lower(Str::random(4));
        }
        $createCategory->slug = $slug;

        $createCategory->save();

        $category = Category::where('id', $createCategory->id)->firstOrFail();
        return $this->respondSuccess($category);
    }

    public function show($id)
    {
        $categoryQuery = Category::where('id', $id);
        $category = $categoryQuery->firstOrFail();
        return $this->respondSuccess($category);
    }

    public function update(Request $request, $id)
    {
        $updateCategory = Category::where('id', $id)->firstOrFail();
        $updateCategory->name = $request->name;

        if ($request->slug) {
            $slug = Str::slug($request->slug, '-');
        } else {
            $slug = Str::slug($request->name, '-');
        }
        if (
            Category::where('slug', $slug)
            ->where('id', '!=', $id)
            ->exists()
        ) {
            $slug = $slug . '-' . Str::lower(Str::random(4));
        }
        $updateCategory->slug = $slug;

        $updateCategory->save();

        $category = Category::where('id', $updateCategory->id)->firstOrFail();
        return $this->respondSuccess($category);
    }

    public function destroy($id)
    {
        $deleteCategory = Category::where('id', $id)->firstOrFail();
        $deleteCategory->delete();
        return $this->respondSuccess($deleteCategory);
    }
}
