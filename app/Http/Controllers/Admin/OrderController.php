<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductCollection;
use App\Models\Order;
use App\Models\Product;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use ApiResponser;

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $pageSize = $request->get('page_size', 10);

        $orderQuery = Order::with('orderproducts.product.productimages');

        $ordersTotal = $orderQuery->get()->count();

        $orders =  $orderQuery
            ->orderBy('created_at', 'desc')
            ->skip(($page - 1) * $pageSize)->limit($pageSize)
            ->get();

        return $this->respondSuccessWithPagination(
            $orders,
            $ordersTotal
        );
    }
}
