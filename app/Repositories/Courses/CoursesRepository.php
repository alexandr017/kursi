<?php

namespace App\Repositories\Courses;

use App\Models\Courses\Course;
use App\Services\Courses\Dto\IndexCoursesDto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CoursesRepository
{
    private function query(): Builder
    {
        return Course::query();
    }

    public function index(IndexCoursesDto $dto): LengthAwarePaginator
    {
        $query = $this->query()
            ->where('status', 1)
            ->whereHas('listings', function ($query) use ($dto) {
                $query->where('listings.id', $dto->listingId);
            });

        $query->whereNotNull('company_id');

        $query->withAvg('schoolReviews', 'rating')
            ->withCount('schoolReviews as reviews_count')
            ->with(['tags', 'school']);

        if ($dto->sortKey) {
            if ($dto->sortKey == 'duration_in_hours') {
                $query->whereNotNull('duration');
                $query->where('no_duration', 0);
            }

            $query->orderBy($dto->sortKey, $dto->sortValue);
        } else {
            $query->join('listing_courses', 'courses.id', 'course_id')
                ->where('listing_courses.listing_id', $dto->listingId);
            $query->orderBy('listing_courses.sort');
        }

        $query->when($dto->tags, function ($query) use ($dto) {
            foreach ($dto->tags as $tag) {
                $query->whereHas('tags', function ($q) use ($tag) {
                    $q->where('tags.id', $tag);
                });
            }

        });

        return $query->paginate(
            $dto->perPage,
            ['*'],
            'page',
            $dto->page
        );
    }

    public function getPopulars(): Collection
    {
        return $this->query()
            ->withAvg('schoolReviews', 'rating')
            ->withCount('schoolReviews as reviews_count')
            ->with(['tags', 'school.url'])
            ->where('is_popular', 1)
            ->limit(15)
            ->get();
    }

    public function getPopularsForStructuredData(): Collection
    {
        return $this->query()
            ->with(['school'])
            ->where('is_popular', 1)
            ->limit(100)
            ->get();
    }

    public function getPromotions(): Collection
    {
        return $this->query()
            ->withAvg('schoolReviews', 'rating')
            ->withCount('schoolReviews as reviews_count')
            ->with(['tags', 'school.url'])
            ->where('has_promotion', 1)
            ->limit(15)
            ->get();
    }

    public function getPromotionsForStructuredData(): Collection
    {
        return $this->query()
            ->with(['school'])
            ->where('has_promotion', 1)
            ->limit(100)
            ->get();
    }

    public function getBySearch(string $search, int $page = 1): LengthAwarePaginator
    {
        return $this->query()
            ->withAvg('schoolReviews', 'rating')
            ->withCount('schoolReviews as reviews_count')
            ->with(['tags', 'school'])
            ->where('title', 'like', "%$search%")
            ->where('status', 1)
            ->paginate(
                3,
                ['*'],
                'page',
                $page
            );
    }

    public function getActivesCount(): int
    {
        return $this->query()
            ->where('status', 1)
            ->whereNull('deleted_at')
            ->count();
    }
}