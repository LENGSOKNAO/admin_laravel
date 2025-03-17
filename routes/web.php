<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product.index');
})->name('product.index');  // Named route added here
