<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout']);

Auth::routes(['register' => false]);

Route::get('products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
Route::resource('products', ProductController::class);
Route::resource('product-galleries', ProductGalleryController::class);

Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
Route::resource('transactions', TransactionController::class);