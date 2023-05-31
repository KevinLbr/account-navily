<?php

namespace App\Http\Managers;

use App\Http\Requests\UpdateSkipperRequest;

class SkipperManager
{
	public static function update(UpdateSkipperRequest $request): void
	{
		auth()->user()->update($request->all());
	}
}