<?php

namespace Tests\Feature\Account;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_account_skipper_view(): void
	{
		$user = User::factory()->create();

		auth()->login($user);

		$response = $this->get(route('account.skipper'));

		$response->assertStatus(200);
	}

	public function test_account_skipper_view_guest(): void
	{
		auth()->logout();

		$response = $this->get(route('account.skipper'));

		$response->assertStatus(302);
		$response->assertRedirect(route('login'));
	}

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
}
