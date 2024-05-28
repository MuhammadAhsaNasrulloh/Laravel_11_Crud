<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home', ['nama' => 'Muhammad Ahsan Nasrulloh']);
});

Route::get('/', function () {
    return view('blog');
});