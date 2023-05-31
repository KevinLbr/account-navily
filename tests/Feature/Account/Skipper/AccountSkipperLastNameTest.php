<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
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

	public function test_update_last_name_too_long(): void
	{
		$user = User::factory()->create(['last_name' => 'original last name']);

		auth()->login($user);

		$new_last_name = Str::random(300);
		$params = [
			'last_name' => $new_last_name
		];

		$response = $this->post(route('account.skipper'), $params);
		$response->assertInvalid(['last_name']);

		$user_refreshed = User::find($user->id);
		$this->assertNotEquals($user_refreshed->last_name, $new_last_name);
	}
}
