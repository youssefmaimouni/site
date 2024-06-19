<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/authentification', [LoginController::class,'authentification'])->name('authentification');

Route::get('/register',[UserController::class ,'register'])->name('register'); 
Route::post('/store',[UserController::class ,'store'])->name('store'); 
