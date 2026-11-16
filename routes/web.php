<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Product;

Route::get('/', function () {
    $products = Product::latest()->take(8)->get();
    return view('index', compact('products'));
});
Route::view('/login','login');
Route::view('/about','about');
Route::view('/product','product');
Route::view('/welcome','welcome');
//     if (View::exists($name)) {
//         return view($name);
//     }
//     return view('index');
// });
//Route::get('/{name}', function ($name) {

use App\Http\Controllers\ShopController;
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

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





