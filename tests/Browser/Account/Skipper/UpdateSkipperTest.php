<?php

namespace Tests\Browser\Account\Skipper;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Str;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateSkipperTest extends DuskTestCase
{
	use DatabaseMigrations;

    public function test_update_skipper_success(): void
    {
		$user = User::factory()->create();

		$this->browse(function (Browser $browser) use ($user) {
			$browser->loginAs($user->id)
				->visit(route('account.skipper'))
				->waitForLocation(route('account.skipper'))
				->type('#first_name', 'UpdateSkipper')
				->click('@save-btn')
				->waitForLocation(route('account.skipper'))
				->assertVisible('@success-alert');
		});
    }

	public function test_update_skipper_error(): void
	{
		$user = User::factory()->create();

		$this->browse(function (Browser $browser) use ($user) {
			$browser->loginAs($user->id)
				->visit(route('account.skipper'))
				->waitForLocation(route('account.skipper'))
				->type('#last_name', Str::random(300))
				->click('@save-btn')
				->waitForLocation(route('account.skipper'))
				->assertVisible('#last_name.is-invalid')
				->assertNotPresent('@success-alert');
		});
	}
}
