<?php

namespace Tests\Browser\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
	use DatabaseMigrations;

    public function test_login_form_success(): void
    {
		$password = 'password';
		$user = User::factory()->create([
			'email' => 'test@test.com',
			'password' => $password
		]);

		$this->browse(function (Browser $browser) use ($user, $password) {
			$browser->visit(route('login'))
				->type('#email', $user->email)
				->type('#password', $password)
				->click('#dusk-login-btn')
				->waitForLocation('/account/informations')
				->assertPathIs(RouteServiceProvider::HOME)
				->assertAuthenticated()
				->logout();
		});
    }

	public function test_login_form_with_bad_credentials(): void
	{
		$password = 'password';
		$bad_password = 'bad_password';
		$user = User::factory()->create([
			'email' => 'test2@test.com',
			'password' => $password
		]);

		$this->browse(function (Browser $browser) use ($user, $bad_password) {
			$browser->visit(route('login'))
				->waitForLocation('/login')
				->type('#email', $user->email)
				->type('#password', $bad_password)
				->click('#dusk-login-btn')
				->assertPathIsNot(RouteServiceProvider::HOME)
				->assertGuest();
		});
	}
}
