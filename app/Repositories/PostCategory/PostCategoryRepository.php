<?php

namespace App\Repositories\PostCategory;

use App\Exceptions\PostCategory\PostCategoryNotFoundException;
use App\Models\Posts\PostCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class PostCategoryRepository implements PostCategoryRepositoryInterface
{
    private function query(): Builder
    {
        return PostCategory::query();
    }

    public function getById(int $id, array $relations = []): PostCategory
    {
        $postCategory = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (is_null($postCategory)) {
            throw new PostCategoryNotFoundException();
        }

        return $postCategory;
    }

    public function getAll(array $relations = []): Collection
    {
        return $this->query()
            ->with($relations)
            ->get();
    }
}