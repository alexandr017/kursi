<?php

namespace App\Repositories\Employee;

use App\Exceptions\Employee\EmployeeNotFoundException;
use App\Exceptions\SavingErrorException;
use App\Models\ListingRating\ListingRating;
use App\Models\Team\Employee;
use App\Models\Team\EmployeeRating;
use Illuminate\Database\Eloquent\Builder;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    private function query(): Builder
    {
        return Employee::query();
    }

    public function saveEmployeeRating(EmployeeRating $employeeRating): bool
    {
        if (!$employeeRating->save()) {
            throw new SavingErrorException();
        }

        return true;
    }

    public function getById(int $id): Employee
    {
        $listing = $this->query()
            ->where('id', $id)
            ->first();

        if (is_null($listing)) {
            throw new EmployeeNotFoundException();
        }

        return $listing;
    }

    public function save(Employee $employee): bool
    {
        if (!$employee->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}