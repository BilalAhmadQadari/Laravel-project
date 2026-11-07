<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
Route::view('/','index');
Route::view('/index','index');
Route::view('/login','login');
Route::view('/about','about');
Route::view('/product','product');
Route::view('/welcome','welcome');

// Route::get('/{name}', function ($name) {
//     if (View::exists($name)) {
//         return view($name);
//     }
//     return view('index');
// });

use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class); 

use App\Http\Controllers\UserController;
Route::resource('users',UserController::class);

use App\Http\Controllers\CommentController;
Route::resource('comments',CommentController::class);

use App\Http\Controllers\PurchasesController;
Route::resource('purchases',PurchasesController::class);


use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');





