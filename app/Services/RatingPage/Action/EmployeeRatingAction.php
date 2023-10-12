<?php

namespace App\Services\RatingPage\Action;

use App\Models\Team\Employee;
use App\Repositories\Employee\EmployeeRepositoryInterface;
use App\Services\RatingPage\Dto\PageRatingDto;
use App\Services\RatingPage\RatingPageAbstractClass;

class EmployeeRatingAction extends RatingPageAbstractClass
{
    public function __construct(protected EmployeeRepositoryInterface $employeeRepository)
    {}

    public function rate(PageRatingDto $dto): Employee
    {
        $employee = $this->employeeRepository->getById($dto->entityId);

        $rateAvg = $this->getRatingValue($employee->getRatingsValue(), $employee->getRatingsCount(), $dto->rate);

        $employee->incrementRatingCount();
        $employee->addRatingsSum($dto->rate);
        $employee->setRatingsValue($rateAvg);

        $this->employeeRepository->save($employee);

        return $employee;
    }
}