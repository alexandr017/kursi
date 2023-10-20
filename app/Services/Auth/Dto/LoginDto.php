<?php

namespace App\Services\Auth\Dto;

use App\Http\Requests\Auth\LoginRequest;
use Spatie\DataTransferObject\DataTransferObject;

class LoginDto extends DataTransferObject
{
    public string $email;
    public string $password;

    public static function fromRequest(LoginRequest $request): self
    {
        return new self(
            email: $request->getEmail(),
            password: $request->getPassword()
        );
    }
}