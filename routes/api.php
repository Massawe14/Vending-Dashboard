<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{category}', [ProductController::class, 'search']);
Route::get('/ads', [AdController::class, 'index']);
Route::get('/ads/{id}', [AdController::class, 'show']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products{id}', [ProductController::class, 'destroy']);
    Route::post('/ads', [AdController::class, 'store']);
    Route::put('/ads/{id}', [AdController::class, 'update']);
    Route::delete('/ads{id}', [AdController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']); 
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
