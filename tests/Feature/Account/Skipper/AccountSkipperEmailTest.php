<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperEmailTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_email(): void
	{
		$user = User::factory()->create(['email' => 'original@email.com']);

		auth()->login($user);

		$new_email = 'updated@email.com';
		$params = [
			'email' => $new_email
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->email, $new_email);
	}

	public function test_update_email_not_valid(): void
	{
		$user = User::factory()->create(['email' => 'original@email.com']);

		auth()->login($user);

		$new_email = 'updated_not_valid_email';
		$params = [
			'email' => $new_email
		];

		$response = $this->post(route('account.skipper'), $params);
		$response->assertInvalid(['email']);

		$user_refreshed = User::find($user->id);
		$this->assertNotEquals($user_refreshed->email, $new_email);
	}
}
