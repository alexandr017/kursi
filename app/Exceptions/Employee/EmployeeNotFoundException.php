<?php

namespace App\Exceptions\Employee;

use App\Exceptions\BusinessLogicException;

class EmployeeNotFoundException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::EMPLOYEE_NOT_FOUND;
    }

    public function getStatusMessage(): string
    {
        return __('errors.employee_not_found');
    }
}