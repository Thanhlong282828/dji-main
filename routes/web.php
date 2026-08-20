<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/bai-viet/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/san-pham', [ProductController::class, 'index'])->name('products.index');
Route::get('/san-pham/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/health', fn () => response()->json(['status' => 'ok', 'service' => 'dji-main']));
