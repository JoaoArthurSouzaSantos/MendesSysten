<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        
    });
});

Route::prefix('cliente')->group(function () {
    Route::get('/users', function () {
       
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
