<?php

namespace App\Services\PostCategory\Action;

use App\Repositories\PostCategory\PostCategoryRepositoryInterface;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\StaticPage\StaticPageRepositoryInterface;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;
use App\Services\PostCategory\Dto\PostCategoryDataDto;

class IndexPostCategoryAction
{
    private const SEO_PAGE_ID = 4;

    public function __construct(
        protected PostCategoryRepositoryInterface $postCategoryRepository,
        protected PostRepositoryInterface $postRepository,
        protected StaticPageRepositoryInterface $staticPageRepository
    )
    {}

    public function run(IndexPostCategoryDto $dto): PostCategoryDataDto
    {
        $page = $this->staticPageRepository->getById(self::SEO_PAGE_ID);

        if ($dto->sectionId) {
            $postCategory = $this->postCategoryRepository->getById($dto->sectionId, ['urls']);
            $page->h1 = 'Статьи по ' . $postCategory->h1 . ' - страница ' . $dto->page;
            $page->title = $postCategory->title . ' - страница ' . $dto->page;
            $page->meta_description = $postCategory->meta_description . ' - страница ' . $dto->page;
            $breadcrumbs = BreadcrumbsRender::get($postCategory->breadcrumbs, $postCategory->h1);
        } else {
            $page->h1 .= ' - страница ' . $dto->page;
            $page->title .= ' - страница ' . $dto->page;
            $page->meta_description .= ' - страница ' . $dto->page;
            $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);
        }

        $categories = $this->postCategoryRepository->getAllWhichHavePost(['urls']);

        $relations = ['category.urls', 'urls'];

        $posts = $this->postRepository->index($dto,$relations);

        return new PostCategoryDataDto(
            posts: $posts,
            category: $postCategory ?? null,
            categories: $categories,
            page: $page,
            breadcrumbs: $breadcrumbs
        );
    }

}
