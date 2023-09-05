<?php

namespace App\Repositories\PostCategory;

use App\Models\Posts\PostCategory;
use Illuminate\Database\Eloquent\Collection;

interface PostCategoryRepositoryInterface
{
    public function getById(int $id, array $relations = []): PostCategory;
    public function getAll(array $relations = []): Collection;
}