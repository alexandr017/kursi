<?php

namespace App\Repositories\Employee;

use App\Models\Team\Employee;
use App\Models\Team\EmployeeRating;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class EmployeeCacheRepository implements EmployeeRepositoryInterface
{
    public function __construct(
        public EmployeeRepository $employeeRepository
    ) {}

    public function saveEmployeeRating(EmployeeRating $employeeRating): bool
    {
        return $this->employeeRepository->saveEmployeeRating($employeeRating);
    }

    public function getById(int $id): Employee
    {
        $key = Employee::CACHE_KEY_BY_ID . $id;

        return Cache::remember($key, Employee::CACHE_SAVE_INTERVAL, function () use ($id) {
            return $this->employeeRepository->getById($id);
        });
    }

    public function save(Employee $employee): bool
    {
        return $this->employeeRepository->save($employee);
    }

    public function getAllEmployees(): Collection
    {
        $key = Employee::CACHE_KEY_ALL_ACTIVE_EMPLOYEES;

        return Cache::remember($key, Employee::CACHE_SAVE_INTERVAL, function () {
            return $this->employeeRepository->getAllEmployees();
        });
    }
}