<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;


// Route::get('/{locale}',function($locale){
//     App::setLocale($locale);
//     return view('Home');
// });
Route::resource('/brands',BrandController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/products',ProductsController::class);
Route::get('/view/{view_id}/',[ViewController::class,'viewGet']);


// Route::get('/',function (){
//     $data = [
//         'name' => 'Md Emon Hossen',
//         'email' => 'mdxhamdemon@gmail.com',
//         'password' => 123456789
//     ];
//     // Cache::put('user_in', $data, now()->addMinute(60));

//     Cache::forget('user_in');
//     dd(Cache::get('user_in'));
//     return view('Home');
// });
