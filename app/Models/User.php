<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	const LEVELS = [
		self::LEVEL_0,
		self::LEVEL_1,
		self::LEVEL_2
	];

	const LEVEL_0 = 'Debutant';
	const LEVEL_1 = 'Confirmé';
	const LEVEL_2 = 'Expert';

	protected $fillable = [
		'email',
		'password',

		'first_name',
		'last_name',
		'phone',
		'description',
		'birth_date',

		'level',
		'points',

		'image',
	];

	protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

	public function getFullNameAttribute(): string
	{
		return "$this->first_name $this->last_name";
	}

	public function	getPointsDisplayAttribute(): string
	{
		$text_points = $this->points < 2
			? Str::plural('point', 1)
			: Str::plural('point', $this->points);

		return $this->points . ' ' . $text_points;
	}

	public function getProgressionAttribute(): int
	{
		$progression = 0;

		$attributes = [
			$this->phone,
			$this->last_name,
			$this->first_name,
			$this->description,
			$this->image,
			$this->birth_date
		];

		$progression_by_attribute_filled = 100 / count($attributes);

		foreach($attributes as $attribute)
		{
			if($attribute != null)
			{
				$progression += $progression_by_attribute_filled;
			}
		}

		return $progression;
	}

	public function getDefaultImageAttribute(): string
	{
		return 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('/images/logo/logo-primary.svg')));
	}
}
