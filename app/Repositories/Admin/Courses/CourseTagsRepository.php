<?php

namespace App\Repositories\Admin\Courses;

use DB;
use App\Models\Tags\Tag;

class CourseTagsRepository
{
    public function getAllTagsForShow() : array
    {
        return DB::table('tags')
            ->select(['*'])
            //->whereNull('employees.deleted_at') // todo ?
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|Tag
    {
        return Tag::find($id);
    }

    public function createTag(array $data) : Tag
    {
        $data['old_id'] = 0; // todo: General error: 1364 Field 'old_id' doesn't have a default value
        $tag = new Tag($data);
        $tag->save();

        return $tag;
    }


    public function updateTag(int $id, array $data) : null|Tag
    {
        $tag = Tag::find($id);

        if ($tag != null) {
            $tag->update($data);
            return $tag;
        }

        return null;
    }

    public function deleteTag(int $id) : null|Tag
    {
        $tag = Tag::find($id);

        if ($tag != null) {
            $tag->delete();
            return $tag;
        }

        return null;
    }

}
