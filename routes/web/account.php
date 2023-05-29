<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/account', function(){
	return redirect(route('account.informations'));
});

Route::middleware('auth')
	->get('/account/informations', [AccountController::class, 'getInformationsAccountView'])
	->name('account.informations');

Route::middleware('auth')
	->get('/account/skipper', [AccountController::class, 'getSkipperAccountView'])
	->name('account.skipper');
