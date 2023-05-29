<?php

namespace Tests\Browser;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
//	use DatabaseTruncation;
//	use RefreshDatabase;

    public function test_login_form(): void
    {
		$password = 'password';
		$user = User::factory()->create([
			'email' => 'test@test.com',
			'password' => $password
		]);

//		TODO fix bug with RefreshDatabase

		$this->browse(function (Browser $browser) use ($user, $password) {
			$browser->visit(route('login'))
				->waitFor('#email')
				->type('#email', $user->email)
				->waitFor('#password')
				->type('#password', $password)
				->waitFor('#dusk-login-btn')
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
