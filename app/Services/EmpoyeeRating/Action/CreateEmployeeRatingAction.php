<?php

namespace App\Services\EmpoyeeRating\Action;

use App\Models\Team\EmployeeRating;
use App\Repositories\Admin\Employees\EmployeesRepository;
use App\Repositories\Employee\EmployeeRepositoryInterface;
use App\Services\EmpoyeeRating\Dto\CreateEmployeeRatingDto;

class CreateEmployeeRatingAction
{
    public function __construct(protected EmployeeRepositoryInterface $employeeRepository)
    {}

    public function run(CreateEmployeeRatingDto $dto)
    {
        $employeeRating = EmployeeRating::create($dto);
        $this->employeeRepository->saveEmployeeRating($employeeRating);

        $employee = $this->employeeRepository->getById($dto->employeeId);
        $employee->incrementRatingCount();
        $employee->addRatingsSum($dto->rate);
        $employee->setRatingsValue(round($employee->getRatingsSum() / $employee->getRatingsCount(), 2));

        $this->employeeRepository->save($employee);

        return $employee;
    }
}