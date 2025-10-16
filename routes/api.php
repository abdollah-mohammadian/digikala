<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('brands', BrandController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);

Route::get('search', [ProductController::class, 'search']);
Route::get('/header-categories', [categoryController::class, 'categoriesMenu']);