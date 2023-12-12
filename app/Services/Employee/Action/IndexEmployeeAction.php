<?php

namespace App\Services\Employee\Action;

use App\Exceptions\Employee\EmployeeNotFoundException;
use App\Repositories\Employee\EmployeeRepositoryInterface;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\Employee\IndexEmployeeResultDto;

class IndexEmployeeAction
{
    public function __construct(
        public EmployeeRepositoryInterface $employeeRepository
    ) {}

    public function run(int $employeeId): IndexEmployeeResultDto
    {
        try {
            $employee = $this->employeeRepository->getById($employeeId);
        } catch (EmployeeNotFoundException) {
            abort(404);
        }

        $breadcrumbs = BreadcrumbsRender::get($employee->breadcrumbs, $employee->h1);

        return new IndexEmployeeResultDto(
            employee: $employee,
            breadcrumbs: $breadcrumbs
        );
    }
}