<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('hello');
// });

Route::view('/','home');

Route::get('/products', [ProductController::class,'index'])
->name('products.index');

Route::get('/products/create',[ProductController::class,'create'])
->name('products.create');

Route::post('/products/store',[ProductController::class,'store'])
->name('products.store');