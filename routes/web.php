<?php

use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\VendingComponent;
use App\Http\Livewire\VendingListComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\ProductListComponent;
use App\Http\Livewire\ReportComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'checkUserType']);

// Route::get('/admin/dashboard', function() {
//     return view('admin-dashboard');
// })->name('admin.dashboard');

// Route::get('/user/dashboard', function() {
//     return view('user-dashboard');
// })->name('user.dashboard');

// Route::get('/', IndexComponent::class);

Route::get('/vending',VendingComponent::class);

Route::get('/vendingList',VendingListComponent::class);

Route::get('/product',ProductComponent::class);

Route::get('/productList',ProductListComponent::class);

Route::get('/report',ReportComponent::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// For User or Customer
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
