<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
// / <- ini namanya root atau direktori utama
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/category', CategoryController::class, ['except' => ['show', 'edit']]);
Route::resource('/supplier', SupplierController::class, ['except' => ['show', 'create', 'edit']]);
Route::resource('/product', ProductController::class, ['except' => ['show']]);
