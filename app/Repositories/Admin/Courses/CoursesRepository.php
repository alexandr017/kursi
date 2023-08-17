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

//    public function find(int $id) : null|object
//    {
//        return Tag::find($id);
//    }
//
//    public function createTag(array $data) : null|object // todo ?
//    {
//        $data['old_id'] = 0; // todo: General error: 1364 Field 'old_id' doesn't have a default value
//        $tag = new Tag($data);
//        $tag->save();
//
//        return $tag;
//    }
//
//
//    public function updateTag(int $id, array $data) : null|object
//    {
//        $tag = Tag::find($id);
//        $tag->update($data);
//
//        return $tag;
//    }
//
//    public function deleteTag(int $id)
//    {
//        $tag = Tag::find($id);
//        $tag->delete();
//
//        return $tag;
//    }

}
