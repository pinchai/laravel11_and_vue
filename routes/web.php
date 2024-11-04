<?php

use Illuminate\Support\Facades\Route;

// GET, POST
Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'doRegister']);

