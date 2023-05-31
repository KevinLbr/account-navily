<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperViewTest extends TestCase
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
}
