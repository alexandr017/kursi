<?php

namespace App\Repositories\Posts;

use App\Services\PostCategory\Dto\IndexPostCategoryDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface
{
    public function getPopulars(): Collection;
    public function index(IndexPostCategoryDto $dto, array $relations = []): LengthAwarePaginator;
}