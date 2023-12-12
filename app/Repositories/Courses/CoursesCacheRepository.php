<?php

namespace App\Repositories\Courses;

use App\Models\Courses\Course;
use App\Services\Courses\Dto\IndexCoursesDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class CoursesCacheRepository implements CoursesRepositoryInterface
{

    public function __construct(
        public CoursesRepository $coursesRepository
    ) {}

    public function index(IndexCoursesDto $dto): LengthAwarePaginator
    {
        return $this->coursesRepository->index($dto);
    }

    public function getPopulars(): Collection
    {
        $key = Course::POPULARS_CACHE_KEY;

        return Cache::remember($key, Course::CACHE_SAVE_INTERVAL, function () {
            return $this->coursesRepository->getPopulars();
        });
    }

    public function getPopularsForStructuredData(): Collection
    {
        $key = Course::POPULARS_FOR_STRUCTURED_DATA_CACHE_KEY;

        return Cache::remember($key, Course::CACHE_SAVE_INTERVAL, function () {
            return $this->coursesRepository->getPopularsForStructuredData();
        });
    }

    public function getPromotions(): Collection
    {
        $key = Course::WITH_PROMOTIONS_CACHE_KET;

        return Cache::remember($key, Course::CACHE_SAVE_INTERVAL, function () {
            return $this->coursesRepository->getPromotions();
        });
    }

    public function getPromotionsForStructuredData(): Collection
    {
        $key = Course::WITH_PROMOTIONS_FOR_STRUCTURED_DATA_CACHE_KET;

        return Cache::remember($key, Course::CACHE_SAVE_INTERVAL, function () {
            return $this->coursesRepository->getPromotionsForStructuredData();
        });

    }

    public function getBySearch(string $search, int $page = 1): LengthAwarePaginator
    {
        return $this->coursesRepository->getBySearch($search, $page);
    }

    public function getActivesCount(): int
    {
        $key = Course::CACHE_KEY_ACTIVES_COUNT;

        return Cache::remember($key, Course::CACHE_SAVE_INTERVAL, function () {
            return $this->coursesRepository->getActivesCount();
        });
    }
}