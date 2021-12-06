<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CategoryCollection;
use App\Models\Category;
use App\Traits\ApiResponser;

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

    public function listCategoriesWithProducts()
    {
        $page = request()->get('page', 1);
        $pageSize = request()->get('page_size', 10);

        $categoryQuery = new Category;

        $categoriesTotal = $categoryQuery->get()->count();

        $categories = new CategoryCollection(
            $categoryQuery
                ->orderBy('created_at', 'desc')
                ->skip(($page - 1) * $pageSize)->limit($pageSize)
                ->get()
        );

        return $this->respondSuccessWithPagination(
            $categories,
            $categoriesTotal
        );
    }
}
