<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperDescriptionTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_description(): void
	{
		$user = User::factory()->create(['description' => 'original description']);

		auth()->login($user);

		$new_description = 'updated description';
		$params = [
			'description' => $new_description
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->description, $new_description);
	}

	//	TODO add test with null description
}
