<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperFirstNameTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_first_name(): void
	{
		$user = User::factory()->create(['first_name' => 'original first name']);

		auth()->login($user);

		$new_first_name = 'updated first name';
		$params = [
			'first_name' => $new_first_name
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->first_name, $new_first_name);
	}

	public function test_update_first_name_too_long(): void
	{
		$user = User::factory()->create(['first_name' => 'original first name']);

		auth()->login($user);

		$new_first_name = Str::random(300);
		$params = [
			'first_name' => $new_first_name
		];

		$response = $this->post(route('account.skipper'), $params);
		$response->assertInvalid(['first_name']);

		$user_refreshed = User::find($user->id);
		$this->assertNotEquals($user_refreshed->first_name, $new_first_name);
	}
}
