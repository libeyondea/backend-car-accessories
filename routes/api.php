<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('admin/auth/signin', [AdminAuthController::class, 'signin']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('admin/auth/me', [AdminAuthController::class, 'me']);
    Route::post('admin/auth/signout', [AdminAuthController::class, 'signout']);

    Route::apiResource('admin/products', AdminProductController::class)->only(['index', 'store', 'update', 'show', 'destroy']);
    Route::apiResource('admin/categories', AdminCategoryController::class)->only(['index', 'store', 'update', 'show', 'destroy']);
    Route::apiResource('admin/brands', AdminBrandController::class)->only(['index', 'store', 'update', 'show', 'destroy']);


    Route::apiResource('admin/categories', AdminCategoryController::class)->only(['index']);
    Route::apiResource('admin/brands', AdminBrandController::class)->only(['index']);
});
Route::get('admin/orders', [AdminOrderController::class, 'index']);
//

Route::post('auth/signin', [AuthController::class, 'signin']);
Route::post('auth/signup', [AuthController::class, 'signup']);

Route::apiResource('products', ProductController::class)->only(['index', 'show']);
Route::apiResource('categories', CategoryController::class)->only(['index']);
Route::apiResource('brands', BrandController::class)->only(['index']);
Route::get('categories/list-categories-with-products', [CategoryController::class, 'listCategoriesWithProducts']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('auth/me', [AuthController::class, 'me']);
    Route::post('auth/signout', [AuthController::class, 'signout']);

    Route::post('checkout', [OrderController::class, 'checkout']);
    Route::post('add-to-cart', [CartController::class, 'addToCart']);
    Route::delete('delete-cart-item', [CartController::class, 'deleteCartItem']);
    Route::get('carts', [CartController::class, 'index']);
});
