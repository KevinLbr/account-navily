<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function getLoginView(): View
	{
		return view('auth.login');
	}
}
