<?php

namespace App\Repositories\Posts;

use App\Models\Posts\Post;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class PostCacheRepository implements PostRepositoryInterface
{

    public function __construct(
        public PostRepository $postRepository
    ) {}

    public function getPopulars(): Collection
    {
        $key = Post::POPULARS_CACHE_KEY;

        return Cache::remember($key, Post::CACHE_SAVE_INTERVAL, function () {
            return $this->postRepository->getPopulars();
        });
    }

    public function getPopularsForStructuredData(): Collection
    {
        $key = Post::POPULARS_FOR_STRUCTURED_DATA_CACHE_KEY;

        return Cache::remember($key, Post::CACHE_SAVE_INTERVAL, function () {
            return $this->postRepository->getPopularsForStructuredData();
        });
    }

    public function index(IndexPostCategoryDto $dto, array $relations = []): LengthAwarePaginator
    {
        return $this->postRepository->index($dto, $relations);
    }

    public function getBySearch(string $q, int $page = 1): LengthAwarePaginator
    {
        return $this->postRepository->getBySearch($q, $page);
    }

    public function getById(int $id): Post
    {
        return $this->postRepository->getById($id);
    }

    public function save(Post $post): bool
    {
        return $this->postRepository->save($post);
    }
}