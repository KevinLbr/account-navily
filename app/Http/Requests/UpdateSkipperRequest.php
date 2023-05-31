<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSkipperRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'last_name' => [
				'nullable',
				'max:255'
			],

			'first_name' => [
				'nullable',
				'max:255'
			]
        ];
    }
}
