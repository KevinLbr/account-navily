<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'email' => 'kevin@navily.com',
             'password' => 'password',
			 'first_name' => 'Kevin',
			 'last_name' => 'Labre',
			 'birth_date' => '1997-10-09',
			 'description' => 'Hello world',
			 'phone' => '+33699999999',
			 'image' => 'data:image/png;base64,' . base64_encode(file_get_contents(__DIR__ . '/images/users/kevin-linkedin.jpeg'))
         ]);
    }
}
