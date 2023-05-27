<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
	use RefreshDatabase;

    public function test_login_success(): void
    {
		// force logout
		auth()->logout();

		$password = "password";
		$user = User::factory()->create(['password' => $password]);

		$credentials = [
			'email' => $user->email,
			'password' => $password,
		];

		$response = $this->post('/login', $credentials);

		$this->assertTrue(auth()->check());
		$response->assertRedirect(RouteServiceProvider::HOME);
    }
}
