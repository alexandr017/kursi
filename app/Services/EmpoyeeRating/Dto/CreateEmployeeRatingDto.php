<?php

namespace App\Services\EmpoyeeRating\Dto;

use App\Http\Requests\EmployeeRating\CreateEmployeeRatingRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateEmployeeRatingDto extends DataTransferObject
{
    public int $employeeId;
    public float $rate;
    public ?int $userId;

    public static function fromRequest(CreateEmployeeRatingRequest $request): self
    {
        return new self(
            employeeId: $request->getEmployeeId(),
            rate: $request->getRate(),
            userId: $request->getUserId()
        );
    }

}