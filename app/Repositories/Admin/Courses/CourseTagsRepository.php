<?php

namespace App\Repositories\Admin\Courses;

use DB;
//use App\Models\Team\Employee;
//use App\Services\FakeRating\FakeRating;
//use App\Models\Urls\Url;

class CourseTagsRepository
{
    public function getAllTagsForShow() : array
    {
        return DB::table('tags')
            ->select('*')
            //->whereNull('employees.deleted_at') // todo ?
            ->get()
            ->toArray();
    }

//    public function find(int $id) : null|object
//    {
//        return Employee::find($id);
//    }
//
//    public function createEmployee(array $data) : null|object // todo ?
//    {
//        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
//            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
//        }
//
//        return DB::transaction(function() use($data) {
//
//            $employee = new Employee($data);
//            $employee->save();
//
//            $url = new Url([
//                'url' => $data['url'],
//                'section_id' => $employee->id,
//                'section_type' => EmployeesRepository::SECTION_TYPE
//            ]);
//            $url->save();
//
//            return $employee;
//        });
//    }
//
//
//    public function updateEmployee(int $id, array $data) : null|object
//    {
//        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
//            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
//        }
//
//        return DB::transaction(function() use($id, $data) {
//
//            $employee = Employee::find($id);
//            $employee->update($data);
//
//            $url = Url::where(['section_id' => $id, 'section_type' => EmployeesRepository::SECTION_TYPE])->first();
//
//            if ($url != null && $url->url != $data['url']) {
//                $url->url = $data['url'];
//                $url->update();
//            }
//
//            return $employee;
//        });
//    }
//
//
//    public function deleteEmployee(int $id)
//    {
//        return DB::transaction(function() use($id) {
//
//            $page = Employee::find($id);
//            $page->delete();
//
//            $url = Url::where(['section_id' => $id, 'section_type' => EmployeesRepository::SECTION_TYPE])->first();
//            $url->delete();
//
//            return $page;
//        });
//    }
//
//    public function getEmployeesForSelect() : array
//    {
//        return Employee::select('id', 'name')->whereNull('deleted_at')->pluck('name', 'id')->toArray();
//    }

}
