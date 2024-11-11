<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/category', function () {
    return view('shop.category');
});

Route::get('/product', function () {
    return view('shop.product');
});

Route::get('/about_us', function () {
    return view('about_us.index');
});
