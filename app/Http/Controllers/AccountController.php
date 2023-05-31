<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSkipperRequest;
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

	public function updateSkipper(UpdateSkipperRequest $request)
	{
		auth()->user()->update($request->all());

		return redirect(route('account.skipper'));
	}
}
