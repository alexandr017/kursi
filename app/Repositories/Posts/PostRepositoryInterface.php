<?php

namespace App\Repositories\Posts;

use App\Models\Posts\Post;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface
{
    public function getPopulars(): Collection;
    public function getPopularsForStructuredData(): Collection;
    public function index(IndexPostCategoryDto $dto, array $relations = []): LengthAwarePaginator;
    public function getBySearch(string $q, int $page = 1): LengthAwarePaginator;
    public function getById(int $id): Post;
    public function save(Post $post): bool;
}