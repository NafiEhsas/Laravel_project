<?php

use Illuminate\Support\Facades\Route;

// Route::get('/index', function () {
//     return redirect()->route('index');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('books', function () {
    return view('books');
})->name('books');
