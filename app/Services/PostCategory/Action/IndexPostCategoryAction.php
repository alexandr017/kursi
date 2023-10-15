<?php

namespace App\Services\PostCategory\Action;

use App\Repositories\PostCategory\PostCategoryRepositoryInterface;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;
use App\Services\PostCategory\Dto\PostCategoryDataDto;

class IndexPostCategoryAction
{
    public function __construct(
        protected PostCategoryRepositoryInterface $postCategoryRepository,
        protected PostRepositoryInterface $postRepository
    )
    {}

    public function run(IndexPostCategoryDto $dto): PostCategoryDataDto
    {
        if ($dto->sectionId) {
            $postCategory = $this->postCategoryRepository->getById($dto->sectionId, ['urls']);
        }

        $categories = $this->postCategoryRepository->getAllWhichHavePost(['urls']);

        $relations = ['category.urls', 'urls'];

        $posts = $this->postRepository->index($dto,$relations);

        return new PostCategoryDataDto(
            posts: $posts,
            category: $postCategory ?? null,
            categories: $categories
        );
    }

}
