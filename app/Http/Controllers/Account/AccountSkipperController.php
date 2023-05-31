<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Managers\SkipperManager;
use App\Http\Requests\UpdateSkipperRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AccountSkipperController extends Controller
{
	public function getSkipperAccountView(): View
	{
		return view('account.skipper')
			->with('user', auth()->user());
	}

	public function updateSkipper(UpdateSkipperRequest $request): RedirectResponse
	{
		SkipperManager::update($request);

		return redirect(route('account.skipper'))
			->with('success', true);
	}
}
