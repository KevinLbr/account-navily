<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AccountController extends Controller
{
    public function getInformationsAccountView(): View
	{
		return view('account.informations')
			->with('user', auth()->user());
	}

	public function getSkipperAccountView(): View
	{
		return view('account.skipper');
	}
}
