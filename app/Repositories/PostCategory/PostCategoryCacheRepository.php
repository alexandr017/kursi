<?php

namespace App\Repositories\PostCategory;

use App\Models\Posts\PostCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class PostCategoryCacheRepository implements PostCategoryRepositoryInterface
{

    public function __construct(
        public PostCategoryRepository $postCategoryRepository
    ) {}

    public function getById(int $id, array $relations = []): PostCategory
    {
        $key = PostCategory::CACHE_KEY_BY_ID . $id;

        return Cache::remember($key, PostCategory::CACHE_SAVE_INTERVAL, function () use ($id, $relations) {
            return $this->postCategoryRepository->getById($id, $relations);
        });
    }

    public function getAllWhichHavePost(array $relations = []): Collection
    {
        $key = PostCategory::CACHE_KEY_ALL_WHICH_HAVE_POSTS;

        return Cache::remember($key, PostCategory::CACHE_SAVE_INTERVAL, function () use ($relations) {
            return $this->postCategoryRepository->getAllWhichHavePost($relations);
        });
    }
}