<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Traits\ApiResponser;

class CartController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->with(['cartproducts.product'])->firstOrFail();
        return $this->respondSuccess($carts);
    }

    public function addToCart(Request $request)
    {
        $checkCart = Cart::where('user_id', auth()->user()->id);
        if ($checkCart->get()->count() < 1) {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->save();
        } else {
            $cart = $checkCart->first();
        }

        $checkProductCart = CartProduct::where('product_id', $request->product_id)->where('cart_id', $cart->id);
        if ($checkProductCart->get()->count() > 0) {
            $qty = $checkProductCart->first()->quantity + $request->quantity;
            if ($qty == 0) {
                $checkProductCart->delete();
            } else {
                $checkProductCart->update(['quantity' => $qty]);
            }
        } else {
            $productCart = new CartProduct;
            $productCart->cart_id = $cart->id;
            $productCart->product_id = $request->product_id;
            $productCart->quantity = $request->quantity;
            $productCart->save();
        }

        $cart = $cart->with('cartproducts')->get();

        return $this->respondSuccess($cart);
    }
}
