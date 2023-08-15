<?php

namespace App\Repositories\Admin\Employees;

use DB;
use App\Models\Team\Employee;

class EmployeesRepository
{
    private const SECTION_TYPE = 4;

    public function getAllEmployeesForShow() : array
    {
        return DB::table('employees')
            ->leftJoin('urls', 'urls.section_id', 'employees.id')
            ->select('employees.id', 'employees.name', 'employees.status', 'urls.url')
            ->where(['urls.section_type' => EmployeesRepository::SECTION_TYPE])
            //->whereNull('deleted_at') // todo почему-то запрос не работает
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return Employee::find($id);
    }

}
