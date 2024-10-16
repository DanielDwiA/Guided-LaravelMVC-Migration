<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::resource('/product',App\Http\Controllers\ProductController::class);
Route::resource('/macbook',App\Http\Controllers\MacBookController::class);