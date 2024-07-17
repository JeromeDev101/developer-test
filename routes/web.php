<?php

use App\Livewire\User\User;
use App\Livewire\Product\Product;
use Illuminate\Support\Facades\Route;
use App\Livewire\Product\ProductCategory;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/products', Product::class )->name('products');
    Route::get('/products-category', ProductCategory::class )->name('products.category');
    Route::get('/user', User::class )->name('users');
});
