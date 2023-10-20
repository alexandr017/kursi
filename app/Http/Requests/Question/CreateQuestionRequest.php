<?php

namespace App\Http\Requests\Question;

use App\Rules\AlwaysTrueRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateQuestionRequest extends FormRequest
{
    const NAME = 'name';
    const EMAIL = 'email';
    const QUESTION = 'question';
    const RULES_ACCEPTED = 'rules_accepted';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
                'required',
            ],
            self::EMAIL => [
                'string',
                'required',
                'email',
            ],
            self::QUESTION => [
                'string',
                'required',
            ],
            self::RULES_ACCEPTED => [
                'bool',
                'required',
                new AlwaysTrueRule(),
            ],
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getQuestion(): string
    {
        return $this->get(self::QUESTION);
    }

    public function getRulesAccepted(): bool
    {
        return $this->get(self::RULES_ACCEPTED);
    }
}