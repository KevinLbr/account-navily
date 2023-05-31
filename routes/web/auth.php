<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')
	->get('/login', [LoginController::class, 'getLoginView'])
	->name('login');

Route::middleware('auth')
	->get('/logout', [LogoutController::class, 'logout'])
	->name('logout');