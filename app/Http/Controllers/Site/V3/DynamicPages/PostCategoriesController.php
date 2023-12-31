<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Users\UserRole;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\PostCategory\Action\IndexPostCategoryAction;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;

// Dynamic type 2
class PostCategoriesController extends Controller implements DynamicPagesInterface
{
    private const POST_CATEGORY_SECTION_TYPE_ID = 2;
    private const POST_SECTION_TYPE_ID = 3;
    private const SEO_PAGE_ID = 4;

    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $dto = new IndexPostCategoryDto(sectionId: $sectionID, page: $paginatePage);
        $action = resolve(IndexPostCategoryAction::class);
        $result = $action->run($dto);

        $breadcrumbs = BreadcrumbsRender::get($result->category->breadcrumbs, $result->category->h1);
        $page = \DB::table('seo_for_pages')->where(['id' => self::SEO_PAGE_ID])->first();

        if ($result->category) {
            $page->h1 = 'Статьи по ' . $result->category->h1 . ' - страница ' . $dto->page;
            $page->title = $result->category->title . ' - страница ' . $dto->page;
            $page->meta_description = $result->category->meta_description . ' - страница ' . $dto->page;
        }

        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/post-categories/{$result->category->id}/edit";
        }

        return view('site.v3.templates.blog.category', [
            'posts' => $result->posts,
            'category' => $result->category,
            'categories' => $result->categories,
            'pageNumber' => $paginatePage,
            'pagesCount' => $result->posts->lastPage(),
            'pageAlias' => $result->category->urls->url,
            'breadcrumbs' => $breadcrumbs,
            'editLink' => $editLink,
            'page' => $page,
            ]);
    }
}
