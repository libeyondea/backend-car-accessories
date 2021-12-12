<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Traits\ApiResponser;

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
}
