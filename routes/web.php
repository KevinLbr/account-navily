<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'getLoginView']);
Route::get('/account', function() {
	dd(auth()->user());
});