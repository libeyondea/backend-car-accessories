<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

Route::post('/auth/signin', [AuthController::class, 'signin']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::post('/auth/signout', [AuthController::class, 'signout']);
});
