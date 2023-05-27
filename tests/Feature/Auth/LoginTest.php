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
		$password = "password";
		$user = User::factory()->create(['password' => $password]);

		$credentials = [
			'email' => $user->email,
			'password' => $user->password,
		];

		$response = $this->post(route('login'), $credentials);

//		$this->assertTrue(auth()->check());
		$this->assertAuthenticated();
		$response->assertRedirect(RouteServiceProvider::HOME);
    }
}
