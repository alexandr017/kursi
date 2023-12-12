<?php

namespace App\Services\Employee;

use App\Models\Team\Employee;
use Spatie\DataTransferObject\DataTransferObject;

class IndexEmployeeResultDto extends DataTransferObject
{
    public Employee $employee;
    public array $breadcrumbs;
}