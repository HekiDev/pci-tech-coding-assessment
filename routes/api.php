<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    //List all Products available
    Route::get('/orders', [OrderController::class,'orders']);

    //Show order details base on the order id
    Route::get('/orders/{order_id}', [OrderController::class,'order_details']);

    //Place an order base on the order id
    Route::post('/orders/{order_id}', [OrderController::class,'place_order']);

    //Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});