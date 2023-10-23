<?php

namespace App\Services\Question\Dto;

use App\Http\Requests\Question\CreateQuestionRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateQuestionDto extends DataTransferObject
{
    public string $name;
    public string $email;
    public string $question;
    public bool $rulesAccepted;

    public static function fromRequest(CreateQuestionRequest $request): self
    {
        return new self(
           name: $request->getName(),
           email: $request->getEmail(),
           question: $request->getQuestion(),
           rulesAccepted: $request->getRulesAccepted(),
        );
    }
}