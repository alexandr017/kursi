<?php

namespace App\Repositories\Employee;

use App\Models\Team\Employee;
use App\Models\Team\EmployeeRating;
use Illuminate\Database\Eloquent\Collection;

interface EmployeeRepositoryInterface
{
    public function saveEmployeeRating(EmployeeRating $employeeRating): bool;
    public function getById(int $id): Employee;
    public function save(Employee $employee): bool;
    public function getAllEmployees(): Collection;
}