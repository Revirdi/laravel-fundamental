<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
   return view('/about');
});

Route::get('/home', function () {
   return view('home');
});

Route::get('/contact-bla-bla', [ContactController::class, 'index'])->name('ctx');