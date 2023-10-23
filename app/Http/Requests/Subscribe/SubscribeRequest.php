<?php

namespace App\Http\Requests\Subscribe;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
{
    const EMAIL = 'email';

    public function rules(): array
    {
        return [
            self::EMAIL => [
                'string',
                'required',
                'email',
            ],
        ];
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }
}