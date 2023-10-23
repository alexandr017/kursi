<?php

namespace App\Services\BackCall\Dto;

use App\Http\Requests\BackCall\CreateBackCallRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateBackCallDto extends DataTransferObject
{
    public string $name;
    public string $phoneNumber;
    public bool $rulesAccepted;

    public static function fromRequest(CreateBackCallRequest $request): self
    {
        return new self(
            name: $request->getName(),
            phoneNumber: $request->getPhoneNumber(),
            rulesAccepted: $request->getRulesAccepted(),
        );
    }
}