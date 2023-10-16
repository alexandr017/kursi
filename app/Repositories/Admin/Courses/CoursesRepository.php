<?php

namespace App\Repositories\Admin\Courses;

use DB;
use App\Models\Courses\Course;

class CoursesRepository
{
    public function getAllCoursesForShow() : array
    {
        return DB::table('courses')
            ->select(['id', 'title', 'status'])
            ->whereNull('deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return Course::find($id);
    }

    public function createCourse(array $data) : null|object // todo ?
    {
        $data['old_id'] = 0; // todo: General error: 1364 Field 'old_id' doesn't have a default value
        $course = new Course($data);
        $course->save();

        return $course;
    }

    public function updateCourse(int $id, array $data) : null|object
    {
        $course = Course::find($id);
        $course->update($data);

        return $course;
    }

    public function deleteCourse(int $id)
    {
        $course = Course::find($id);
        $course->delete();

        return $course;
    }

}
