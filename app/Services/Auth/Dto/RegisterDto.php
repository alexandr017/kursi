<?php

namespace App\Services\Auth\Dto;

use App\Http\Requests\Auth\RegisterRequest;
use Spatie\DataTransferObject\DataTransferObject;

class RegisterDto extends DataTransferObject
{
    public string $firstName;
    public string $lastName;
    public string $middleName;
    public string $email;
    public string $password;

    public static function fromRequest(RegisterRequest $request): self
    {
        return new self(
            firstName: $request->getFirstName(),
            lastName: $request->getLastName(),
            middleName: $request->getMiddleName(),
            email: $request->getEmail(),
            password: $request->getPassword(),
        );
    }
}