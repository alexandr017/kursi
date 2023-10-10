<?php

namespace App\Http\Requests\EmployeeRating;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRatingRequest extends FormRequest
{
    const EMPLOYEE_ID = 'employee_id';
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

    public function getEmployeeId(): int
    {
        return $this->route(self::EMPLOYEE_ID);
    }

    public function getRate(): float
    {
        return $this->get(self::RATE);
    }

    public function getUserId(): ?int
    {
        return $this->user()?->id;
    }
}