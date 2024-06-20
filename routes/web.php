<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('index')->middleware('auth');

Route::get('/creat', function () {
    return view('creat_site');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authentification', [LoginController::class, 'authentification'])->name('authentification');

Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('auth');
Route::post('/store', [UserController::class, 'store'])->name('store');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/create', [SiteController::class, 'site_create'])->name('create');
Route::post('/site/store', [SiteController::class, 'store'])->name('site.store');

Route::get('/toggle-sidebar', function () {
    $isOpen = session('sidebar_open', false); // Get current state, default is false
    session(['sidebar_open' => !$isOpen]); // Toggle the state
    return redirect()->back(); // Redirect back to the previous page
})->name('toggle-sidebar');