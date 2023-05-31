<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Managers\SkipperManager;
use App\Http\Requests\UpdateSkipperRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AccountInformationController extends Controller
{
    public function getInformationsAccountView(): View
	{
		return view('account.informations')
			->with('user', auth()->user());
	}
}
