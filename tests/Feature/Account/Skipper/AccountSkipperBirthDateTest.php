<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperBirthDateTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_birth_date(): void
	{
		$user = User::factory()->create(['birth_date' => '1999-09-10']);

		auth()->login($user);

		$new_birth_date = '1999-12-12';
		$params = [
			'birth_date' => $new_birth_date
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->birth_date, $new_birth_date);
	}
}
