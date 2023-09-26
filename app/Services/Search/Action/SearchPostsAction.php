<?php

namespace App\Services\Search\Action;

use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchPostsAction
{
    public function __construct(
        protected PostRepositoryInterface $postRepository
    ) {}

    public function run(string $q, int $page): LengthAwarePaginator
    {
        return $this->postRepository->getBySearch($q, $page);
    }
}