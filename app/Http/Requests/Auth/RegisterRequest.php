<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const EMAIL = 'email';
    const MIDDLE_NAME = 'middle_name';
    const PASSWORD = 'password';

    public function rules()
    {
        return [
            self::FIRST_NAME => [
                'string',
                'required',
                'max:255',
            ],
            self::LAST_NAME => [
                'string',
                'required',
                'max:255',
            ],
            self::MIDDLE_NAME => [
                'string',
                'nullable',
                'max:255',
            ],
            self::EMAIL => [
                'string',
                'required',
                'unique:users',
                'email',
                'max:255',
            ],
            self::PASSWORD => [
                'string',
                'required',
                'min:5',
            ],
        ];
    }

    public function getFirstName(): string
    {
        return $this->get(self::FIRST_NAME);
    }

    public function getLastName(): string
    {
        return $this->get(self::LAST_NAME);
    }

    public function getMiddleName(): string
    {
        return $this->get(self::MIDDLE_NAME);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }

}