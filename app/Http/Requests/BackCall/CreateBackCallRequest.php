<?php

namespace App\Http\Requests\BackCall;

use App\Rules\AlwaysTrueRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateBackCallRequest extends FormRequest
{
    const NAME = 'name';
    const PHONE_NUMBER = 'phone_number';
    const RULES_ACCEPTED = 'rules_accepted';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
                'required',
            ],
            self::PHONE_NUMBER => [
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

    public function getPhoneNumber(): string
    {
        return $this->get(self::PHONE_NUMBER);
    }

    public function getRulesAccepted(): bool
    {
        return $this->get(self::RULES_ACCEPTED);
    }
}