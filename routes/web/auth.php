<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')
	->get('/login', [LoginController::class, 'getLoginView'])
	->name('login');

Route::middleware('auth')
	->get('/logout', function()
	{
		auth()->logout();
		return redirect(route('login'));
	})
	->name('logout');