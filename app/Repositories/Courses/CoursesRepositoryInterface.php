<?php

namespace App\Repositories\Courses;

use App\Services\Courses\Dto\IndexCoursesDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface CoursesRepositoryInterface
{
    public function index(IndexCoursesDto $dto): LengthAwarePaginator;
    public function getPopulars(): Collection;
    public function getPromotions(): Collection;
    public function getBySearch(string $search, int $page = 1): LengthAwarePaginator;
}