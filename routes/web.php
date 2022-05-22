<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['role:Admin']], function () {
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.manage');
    Route::get('/approve/{id}/order', [App\Http\Controllers\Admin\OrderController::class, 'orderApprove'])->name('order.approve');
    Route::get('/customers', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customers.manage');
    Route::get('/product/manage', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.manage');
    Route::get('/product/add', [App\Http\Controllers\Admin\ProductController::class, 'addProductForm'])->name('product.form');
    Route::post('/product/add', [App\Http\Controllers\Admin\ProductController::class, 'addProduct'])->name('product.add');
    Route::get('/product/{id}/update', [App\Http\Controllers\Admin\ProductController::class, 'updateProductForm'])->name('product.update.form');
    Route::post('/product/{id}/update', [App\Http\Controllers\Admin\ProductController::class, 'updateProduct'])->name('product.update');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/order/{id}/view', [App\Http\Controllers\Admin\OrderController::class, 'view'])->name('order.view');
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/{cat?}', [App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'productDetail'])->name('product.detail');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clearCart'])->name('cart.clear');

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index')->middleware('auth');
Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/thankyou', [App\Http\Controllers\ThankyouController::class, 'index'])->name('thankyou.index');
