<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperPhoneTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_phone(): void
	{
		$user = User::factory()->create(['phone' => '+33 (0)7 99 99 99 99']);

		auth()->login($user);

		$new_phone = '+33 (0)7 77 77 77 77';
		$params = [
			'phone' => $new_phone
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->phone, $new_phone);
	}

	//	TODO Add test with invalid phone
}
