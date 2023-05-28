<?php

namespace Tests\Feature\Account;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountInformationTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_account_informations_view(): void
	{
		$user = User::factory()->create();

		auth()->login($user);

		$response = $this->get('/account');

		$response->assertStatus(200);
	}

	public function test_account_informations_view_guest(): void
	{
		auth()->logout();

		$response = $this->get('/account');

		$response->assertStatus(302);
		$response->assertRedirect(route('login'));
	}
}
