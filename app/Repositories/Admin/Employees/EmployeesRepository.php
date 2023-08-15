<?php

namespace App\Repositories\Admin\Employees;

use DB;
use App\Models\Team\Employee;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;

class EmployeesRepository
{
    private const SECTION_TYPE = 4;

    public function getAllEmployeesForShow() : array
    {
        return DB::table('employees')
            ->leftJoin('urls', 'urls.section_id', 'employees.id')
            ->select('employees.id', 'employees.name', 'employees.status', 'urls.url')
            ->where(['urls.section_type' => EmployeesRepository::SECTION_TYPE])
            ->whereNull('employees.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return Employee::find($id);
    }

    public function createEmployee(array $data) : null|object // todo ?
    {
        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($data) {

            $employee = new Employee($data);
            $employee->save();

            $url = new Url([
                'url' => $data['url'],
                'section_id' => $employee->id,
                'section_type' => EmployeesRepository::SECTION_TYPE
            ]);
            $url->save();

            return $employee;
        });
    }


    public function updateEmployee(int $id, array $data) : null|object
    {
        if (!isset($data['average_rating']) && !isset($data['number_of_votes'])) {
            [$data['average_rating'], $data['number_of_votes']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($id, $data) {

            $employee = Employee::find($id);
            $employee->update($data);

            $url = Url::where(['section_id' => $id, 'section_type' => EmployeesRepository::SECTION_TYPE])->first();

            if ($url != null && $url->url != $data['url']) {
                $url->url = $data['url'];
                $url->update();
            }

            return $employee;
        });
    }


    public function deleteEmployee(int $id)
    {
        return DB::transaction(function() use($id) {

            $page = Employee::find($id);
            $page->delete();

            $url = Url::where(['section_id' => $id, 'section_type' => EmployeesRepository::SECTION_TYPE])->first();
            $url->delete();

            return $page;
        });
    }


}
