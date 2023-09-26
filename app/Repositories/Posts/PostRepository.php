<?php

namespace App\Repositories\Posts;

use App\Models\Posts\Post;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function index(IndexPostCategoryDto $dto, array $relations = []): LengthAwarePaginator
    {
        $query = $this->query()->where('status', 1);

        if ($dto->sectionId) {
            $query->where('category_id', $dto->sectionId);
        }

        //ToDo: Add sort order

        $query->with($relations);

        return $query->paginate(
            $dto->perPage,
            ['*'],
            'page',
            $dto->page
        );
    }

    public function getBySearch(string $q, int $page = 1): LengthAwarePaginator
    {
        return $this->query()
            ->where('title', 'like', "%$q%")
            ->orWhere('content', 'like', "%$q%")
            ->orderByDesc('rating_value')
            ->with(['urls', 'category.urls'])
            ->paginate(
                2,
                ['*'],
                'page',
                $page
            );
    }
}