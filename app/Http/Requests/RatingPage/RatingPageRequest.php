<?php

namespace App\Http\Requests\RatingPage;

use Illuminate\Foundation\Http\FormRequest;

class RatingPageRequest extends FormRequest
{
    const ENTITY_ID = 'entity_id';
    const ENTITY_TYPE = 'entity_type';
    const RATE = 'rating_value';

    public function rules(): array
    {
        return [
            self::RATE => [
                'numeric',
                'min:0',
                'max:5',
            ]
        ];
    }

    public function getEntityId(): int
    {
        return $this->get(self::ENTITY_ID);
    }

    public function getEntityType(): string
    {
        return $this->get(self::ENTITY_TYPE);
    }

    public function getRate(): float
    {
        return $this->get(self::RATE);
    }
}