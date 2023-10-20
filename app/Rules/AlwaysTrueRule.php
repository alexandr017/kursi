<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlwaysTrueRule implements Rule
{
    public function passes($attribute, $value)
    {
        return (bool)$value === true;
    }

    public function message()
    {
        return 'The :attribute must be true.';
    }
}