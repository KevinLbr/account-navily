<?php

namespace Tests\Browser;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
	use DatabaseMigrations;

    public function test_login_form(): void
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
				->waitForLocation('/account')
				->assertPathIs(RouteServiceProvider::HOME)
				->screenshot('test_login_form');
		});
    }

	public function test_login_form_with_bad_credentials(): void
	{
//		TODO
	}
}
