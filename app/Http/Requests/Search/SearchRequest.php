<?php

namespace App\Http\Requests\Search;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    const Q = 'q';
    const PAGE = 'page';

    public function rules(): array
    {
        return [
            self::Q => [
                'string'
            ],
            self::PAGE => [
                'integer',
                'nullable',
            ],
        ];
    }

    public function getQ(): string
    {
        $q = $this->get(self::Q);

        if (str_ends_with($q, '/')) {
            $q = substr($q, 0, -1);
        }

        return $q;
    }

    public function getPage(): int
    {
        return $this->get(self::PAGE) ?? 1;
    }
}