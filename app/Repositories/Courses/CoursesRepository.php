<?php

namespace App\Repositories\Courses;

use App\Models\Courses\Course;
use App\Services\Courses\Dto\IndexCoursesDto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class CoursesRepository implements CoursesRepositoryInterface
{
    private function query(): Builder
    {
        return Course::query();
    }

    public function index(IndexCoursesDto $dto): LengthAwarePaginator
    {
        $query = $this->query()
            ->whereHas('listings', function ($query) use ($dto) {
                $query->where('listings.id', $dto->listingId);
            });

        $query->whereNotNull('company_id');

        $query->withAvg('schoolReviews', 'rating')
            ->withCount('schoolReviews as reviews_count')
            ->with(['tags', 'school']);

        if ($dto->sortKey) {
            $query->orderBy($dto->sortKey, $dto->sortValue);
        } else {
            $query->with(['listings' => function($q) use ($dto) {
                $q->where('listings.id', $dto->listingId)
                    ->orderBy('listing_courses.sort', 'desc');
            }]);
        }

        $query->when($dto->tags, function ($query) use ($dto) {
            $query->whereHas('tags', function ($q) use ($dto) {
                $q->whereIn('tags.id', $dto->tags);
            });
        });

        return $query->paginate(
            $dto->perPage,
            ['*'],
            'page',
            $dto->page
        );
    }
}