<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamerController;






Route::resource('kamer', KamerController::class);
Route::resource('klant', \App\Http\Controllers\KlantController::class);

Route::resource('boekingen', \App\Http\Controllers\BoekingenController::class);





Route::get('/info', function () {
    return view('info');
});



Route::get('/', function () {
    return view('welcome');
});


Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});

Auth::routes();





