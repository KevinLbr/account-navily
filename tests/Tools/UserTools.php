<?php

namespace Tests\Tools;

use App\Models\User;

trait UserTools
{
	private function createUserAndGetCredentials(?string $password = "password"): array
	{
		$user = User::factory()->create(['password' => $password]);

		return [
			'email' => $user->email,
			'password' => $password,
		];
	}
}