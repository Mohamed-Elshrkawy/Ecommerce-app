<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\user\ShopController;
use App\Http\Controllers\admin\OrderController;

Route::get('/', [HomeController::class, 'home']);


Route::get('/dashboard', [HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::get('viewCategory',[CategoryController::class,'viewCategory'])
    ->middleware(['auth','admin']);

Route::get('createCategory',[CategoryController::class,'createCategory'])
    ->middleware(['auth','admin']);

Route::post('addCategory', [CategoryController::class, 'addCategory'])
    ->middleware(['auth', 'admin']);

Route::get('deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])
    ->middleware(['auth', 'admin']);

Route::get('editCategory/{id}', [CategoryController::class, 'editCategory'])
    ->middleware(['auth', 'admin']);

Route::post('updateCategory/{id}', [CategoryController::class, 'updateCategory'])
    ->middleware(['auth', 'admin']);

Route::get('addProduct', [ProductController::class, 'addProduct'])
    ->middleware(['auth', 'admin']);

Route::post('uploadProduct', [ProductController::class, 'uploadProduct'])
    ->middleware(['auth', 'admin']);

Route::get('viewProduct', [ProductController::class, 'viewProduct'])
    ->middleware(['auth', 'admin']);

Route::get('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])
    ->middleware(['auth', 'admin']);

Route::get('editProduct/{id}', [ProductController::class, 'editProduct'])
    ->middleware(['auth', 'admin']);

Route::post('updateProduct/{id}', [ProductController::class, 'updateProduct'])
    ->middleware(['auth', 'admin']);


Route::get('itemSearch', [ProductController::class, 'itemSearch'])
    ->middleware(['auth', 'admin']);

Route::get('single_product/{id}', [ShopController::class, 'singleProduct']);


Route::get('addCart/{id}', [ShopController::class, 'addToCart'])
    ->middleware(['auth', 'verified']);

Route::get('viewCart', [ShopController::class, 'viewCart'])
    ->middleware(['auth', 'verified']);

Route::get('deleteCart/{id}', [ShopController::class, 'deleteCart'])
    ->middleware(['auth', 'verified']);

Route::get('viewCheckout', [ShopController::class, 'viewCheckout'])
    ->middleware(['auth', 'verified']);

Route::post('makeOrder', [ShopController::class, 'makeOrder'])
    ->middleware(['auth', 'verified']);

Route::get('viewOrder', [OrderController::class, 'viewOrder'])
    ->middleware(['auth', 'admin']);

Route::get('onTheWay/{id}', [OrderController::class, 'onTheWay'])
    ->middleware(['auth', 'admin']);

Route::get('Delivered/{id}', [OrderController::class, 'Delivered'])
    ->middleware(['auth', 'admin']);

Route::controller(ShopController::class)->group(function(){

    Route::get('stripe/{total}', 'stripe');

    Route::post('stripe/{total}', 'stripePost')->name('stripe.post');

});
