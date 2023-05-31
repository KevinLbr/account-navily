<?php

namespace Tests\Feature\Account\Skipper;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use Tests\Tools\UserTools;

class AccountSkipperImageTest extends TestCase
{
	use RefreshDatabase;
	use UserTools;

	public function test_update_image(): void
	{
		$user = User::factory()->create(['image' => null]);

		auth()->login($user);

		$uploaded_file = UploadedFile::fake()->image('avatar.jpg');
		$uploaded_file_base64 = 'data:image/png;base64,' . base64_encode(file_get_contents($uploaded_file));

		$params = [
			'image' => $uploaded_file
		];

		$this->post(route('account.skipper'), $params);

		$user_refreshed = User::find($user->id);
		$this->assertEquals($user_refreshed->image, $uploaded_file_base64);
	}
}
