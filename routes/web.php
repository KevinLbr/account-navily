<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')
	->get('/login', [LoginController::class, 'getLoginView'])
	->name('login');

Route::middleware('auth')
	->get('/account', [AccountController::class, 'getInformationsAccountView'])
	->name('account');

// TMP
Route::middleware('auth')
	->get('/logout', function()
	{
		auth()->logout();
		redirect(route('login'));
	})
	->name('logout');