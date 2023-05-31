<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

			$table->string('email')
				->unique();
			$table->timestamp('email_verified_at')
				->nullable();
			$table->string('password');

            $table->string('last_name')
				->nullable();
            $table->string('first_name')
				->nullable();
            $table->string('phone')
				->nullable();
			$table->text('description')
				->nullable();
            $table->date('birth_date')
				->nullable();

			$table->enum('level', User::LEVELS)
				->default(User::LEVEL_0);
			$table->unsignedInteger('points')
				->default(0);

            $table->longText('image')
				->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
