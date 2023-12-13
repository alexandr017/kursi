<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UrlValidationRule implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9\/-]+$/', $value);
    }

    public function message()
    {
        return 'The :attribute must contain only English alphabets, numbers and special characters like "/" and "-".';
    }
}
