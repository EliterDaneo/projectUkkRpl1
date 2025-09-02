<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/category', CategoryController::class, ['except' => ['show', 'edit']]);
Route::resource('/supplier', SupplierController::class, ['except' => ['show', 'create', 'edit']]);
