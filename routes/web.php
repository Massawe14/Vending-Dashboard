<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\VendingComponent;
use App\Http\Livewire\User\VendingListComponent;
use App\Http\Livewire\User\ProductComponent;
use App\Http\Livewire\User\ProductListComponent;
use App\Http\Livewire\User\EditProductComponent;
use App\Http\Livewire\User\ReportComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/user/vending', VendingComponent::class);

Route::get('/user/vendingList', VendingListComponent::class);

Route::get('/user/product', ProductComponent::class);

Route::get('/user/productList', ProductListComponent::class);

Route::get('/user/editProduct', EditProductComponent::class);

Route::get('/user/report', ReportComponent::class);

Route::get('create', [ProductsController::class, 'create']);
Route::post('user/product',  [ProductsController::class, 'store']);

Route::get('livewire.user.product-list-component', [ProductsController::class, 'index']);

Route::get('user/editProduct/{id}', [ProductsController::class, 'edit']);

Route::put('update-data/{id}', [ProductsController::class, 'update']);

Route::get('user/deleteProduct/{id}', [ProductsController::class, 'destroy']);

// For User or Customer
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
