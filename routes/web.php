<?php

//Student name: Amanda Msutu
//Student number: 2224286000
//Web Frameworks: Challenge 1 - Bookstore App

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/restricted', function () {
    return view('restricted');
})->middleware('check.age');






