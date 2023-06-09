<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class LoginTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_login_view(): void
	{
		$response = $this->get(route('login'));

		$response->assertStatus(200);
	}

    public function test_login_success(): void
    {
		auth()->logout();

		$response = $this->post(route('login'), $this->createUserAndGetCredentials());

		$this->assertAuthenticated();
		$response->assertRedirect(RouteServiceProvider::HOME);
		$response->assertStatus(302);
    }

	public function test_login_failed_with_bad_password(): void
	{
		auth()->logout();

		$credentials = $this->createUserAndGetCredentials();
		$credentials['password'] = "bad_password";

		$response = $this->post(route('login'), $credentials);

		$this->assertGuest();
		$response->assertStatus(302);
	}
}
