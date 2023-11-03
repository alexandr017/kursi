<?php

namespace App\Repositories\Courses;

use App\Models\Courses\Course;
use App\Services\Courses\Dto\IndexCoursesDto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
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
            ->with(['tags', 'school'])
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
            ->with(['tags', 'school'])
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
            ->paginate(
                3,
                ['*'],
                'page',
                $page
            );
    }
}