<?php

namespace App\Http\Controllers;

use App\Http\Managers\SkipperManager;
use App\Http\Requests\UpdateSkipperRequest;
use Illuminate\Http\RedirectResponse;
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
		return view('account.skipper')
			->with('user', auth()->user());
	}

	public function updateSkipper(UpdateSkipperRequest $request): RedirectResponse
	{
		SkipperManager::update($request);

		return redirect(route('account.skipper'));
	}
}
