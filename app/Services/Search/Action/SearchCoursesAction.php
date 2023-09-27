<?php

namespace App\Services\Search\Action;

use App\Repositories\Courses\CoursesRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchCoursesAction
{
    public function __construct(
        protected CoursesRepositoryInterface $coursesRepository,
    ) {}

    public function run(string $q, int $page): LengthAwarePaginator
    {
        return $this->coursesRepository->getBySearch($q, $page);
    }
}