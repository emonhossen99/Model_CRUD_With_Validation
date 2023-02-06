<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;


Route::get('/',function(){
    return view('Home');
});
Route::resource('/brands',BrandController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/products',ProductsController::class);
