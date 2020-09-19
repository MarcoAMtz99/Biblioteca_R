<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('layouts.libros');
});
Route::resource('/libros',LibroController::class);
