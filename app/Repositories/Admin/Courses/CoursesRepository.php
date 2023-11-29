<?php

namespace App\Repositories\Admin\Courses;

use App\Models\Listing\ListingCourse;
use DB;
use App\Models\Courses\Course;
use Illuminate\Database\Eloquent\Collection;

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

    public function getAllCoursesForListing(int $listingId): Collection
    {
        return Course::query()
            ->join('listing_courses', 'courses.id', 'course_id')
            ->where('listing_courses.listing_id', $listingId)
            ->orderBy('listing_courses.sort')
            ->with(['listings' => function ($q) use ($listingId) {
                $q->where('listing_id', $listingId);
            }, 'school'])
            ->select(['courses.id', 'courses.title', 'courses.status', 'company_id'])
            ->whereNull('deleted_at')
            ->get();
    }

    public function find(int $id) : null|object
    {
        return Course::with(['listings', 'tags'])->find($id);
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
        $course = Course::with(['listings'])->find($id);
        $course->update($data);

        return $course;
    }

    public function deleteCourse(int $id)
    {
        $course = Course::find($id);
        $course->delete();

        return $course;
    }

    public function syncListings(int $courseId, array $data): bool
    {
        ListingCourse::query()->where('course_id', $courseId)->delete();

        ListingCourse::query()->insert($data);

        return true;
    }

    public function syncTags(Course $course, array $tags): bool
    {
        $course->tags()->sync($tags);

        return true;
    }


    public function getAll(): Collection
    {
        return Course::query()
            ->whereNull('deleted_at')
            ->select(['id', 'title'])
            ->where('status', 1)
            ->get();
    }

}
