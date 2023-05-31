<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
		$level = fake()
			->randomElement(User::LEVELS);

		if($level == User::LEVEL_0)
		{
			$point_min = 0;
			$point_max = 100;
		}
		elseif($level == User::LEVEL_1)
		{
			$point_min = 101;
			$point_max = 200;
		}
		else
		{
			$point_min = 201;
			$point_max = 300;
		}

		$points = fake()
			->numberBetween($point_min, $point_max);

        return [
            'email' => fake()
				->unique()
				->safeEmail(),

            'email_verified_at' => now(),

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

			'last_name' => fake()
				->lastName(),

			'first_name' => fake()
				->firstName(),

			'phone' => fake()
				->phoneNumber(),

			'description' => fake()
				->text(),

			'birth_date' => fake()
				->dateTimeBetween('-30 years', "-20 years"),

			'level' => $level,

			'points' => $points,

			'image' => null,

            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
