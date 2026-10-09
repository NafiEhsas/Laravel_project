<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
Route::resource('books', BookController::class);
// Route::get('/index', function () {
//     return redirect()->route('index');
// });

// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Route::get('books', function () {
//     return view('books');
// })->name('books');


// Route::get('about', function () {
//     return view('about');
// })->name('about');
