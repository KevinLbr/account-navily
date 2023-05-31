<?php

use App\Http\Controllers\Account\AccountInformationController;
use App\Http\Controllers\Account\AccountSkipperController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
	// if not login, it's redirect to login
	return redirect(route('account.informations'));
});

Route::get('/account', function(){
	return redirect(route('account.informations'));
});

Route::middleware('auth')
	->get('/account/informations', [AccountInformationController::class, 'getInformationsAccountView'])
	->name('account.informations');

Route::middleware('auth')
	->get('/account/skipper', [AccountSkipperController::class, 'getSkipperAccountView'])
	->name('account.skipper');

Route::middleware('auth')
	->post('/account/skipper', [AccountSkipperController::class, 'updateSkipper'])
	->name('account.skipper');
