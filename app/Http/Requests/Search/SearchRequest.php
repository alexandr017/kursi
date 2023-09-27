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
        return $this->get(self::Q);
    }

    public function getPage(): int
    {
        return $this->get(self::PAGE) ?? 1;
    }
}