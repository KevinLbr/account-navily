<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperLastNameTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_last_name(): void
	{
		$user = User::factory()->create(['last_name' => 'original last name']);

		auth()->login($user);

		$new_last_name = 'updated last name';
		$params = [
			'last_name' => $new_last_name
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->last_name, $new_last_name);
	}

	//	TODO Add test with last name +255 letters
}
