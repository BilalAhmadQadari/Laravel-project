<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
    return view('index');
});

Route::get('/login', function () {
    return view('login');
    
    
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/product', function(){
    return view('product');
    
});
Route::get('/welcome', function(){
    return view('welcome');
    
});

use App\Http\Controllers\ProductController;
Route::resource('products',ProductController::class);

use App\Http\Controllers\UserController;
Route::resource('users',UserController::class);

use App\Http\Controllers\CommentController;
Route::resource('comments',CommentController::class);

use App\Http\Controllers\PurchasesController;
Route::resource('purchases',PurchasesController::class);

