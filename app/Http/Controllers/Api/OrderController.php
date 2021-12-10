<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CheckoutRequest;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Traits\ApiResponser;

class OrderController extends Controller
{
    use ApiResponser;

    public function checkout(CheckoutRequest $request)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->firstOrFail();
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->status = 'pending';
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->email = $request->email;
        $order->phone_number = $request->phone_number;
        $order->address = $request->address;
        if ($order->save()) {
            foreach ($request->order_products as $key => $order_product) {
                $orderProduct = new OrderProduct;
                $orderProduct->product_id = $order_product['product_id'];
                $orderProduct->order_id = $order->id;
                $orderProduct->price = (($order_product['product']['price'] - (($order_product['product']['price'] * $order_product['product']['discount']) / 100)) * $order_product['quantity']);
                $orderProduct->quantity = $order_product['quantity'];
                if ($orderProduct->save()) {
                    CartProduct::where('product_id', $order_product['product_id'])->where('cart_id', $cart->id)->delete();
                }
            }
            return $this->respondSuccess('Checkout product success');
        }
    }
}
