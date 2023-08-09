<?php

namespace App\Services\Courses\Actions;

use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Services\Courses\Dto\IndexCoursesDto;

class IndexCoursesAction
{
    public function __construct(protected CoursesRepositoryInterface $coursesRepository)
    {}

    public function run(IndexCoursesDto $dto)
    {
        return $this->coursesRepository->index($dto);
    }
}