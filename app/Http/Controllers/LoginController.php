<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LoginController extends Controller
{
    public function getLoginView(): View
	{
		return view('auth.login');
	}
}
