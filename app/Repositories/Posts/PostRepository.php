<?php

namespace App\Repositories\Posts;

use App\Models\Posts\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class PostRepository implements PostRepositoryInterface
{
    private function query(): Builder
    {
        return Post::query();
    }

    public function getPopulars(): Collection
    {
        return $this->query()
            ->orderByDesc('rating_value')
            ->with(['urls', 'category.urls'])
            ->limit(15)
            ->get();
    }
}