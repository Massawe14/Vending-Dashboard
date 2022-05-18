<?php

use App\Models\Product;
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

Route::get('/products', function() {
    return Product::all();
});

Route::post('/products', function() {
    return Product::create([
        'product_id' => '1',
        'name' => 'Product One',
        'slug' => 'product-one',
        'price' => '99.99',
        'description' => 'This is product one',
        'vending_id' => '1'
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
