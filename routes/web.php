<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('index');

Route::get('/login', [LoginController::class,'authentication'])->name('login');

Route::get('/register',[UserController::class ,'store'])->name('register');
