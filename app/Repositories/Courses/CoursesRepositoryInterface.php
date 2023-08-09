<?php

namespace App\Repositories\Courses;

use App\Services\Courses\Dto\IndexCoursesDto;
use Illuminate\Pagination\LengthAwarePaginator;

interface CoursesRepositoryInterface
{
    public function index(IndexCoursesDto $dto): LengthAwarePaginator;
}