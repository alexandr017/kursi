<?php

namespace App\Http\Controllers\Site\V3\BlogIndexPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\IndexBlogRequest;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\PostCategory\Action\IndexPostCategoryAction;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;

class BlogIndexPageController extends Controller
{
    private const SEO_PAGE_ID = 4;

    public function index(
        IndexBlogRequest $request,
        IndexPostCategoryAction $action,
        $pageNumber = 1
    ) {
        $dto = IndexPostCategoryDto::fromBlogIndexRequest($request, page: $pageNumber);
        $result = $action->run($dto);

        // todo: можно написать более красиво через репозиторий
        $page = \DB::table('seo_for_pages')->where(['id' => self::SEO_PAGE_ID])->first();

        $page->h1 .= ' - страница ' . $dto->page;
        $page->title .= ' - страница ' . $dto->page;
        $page->meta_description .= ' - страница ' . $dto->page;

        $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);

        return view('site.v3.templates.blog.category', [
            'posts' => $result->posts,
            'category' => $result->category,
            'categories' => $result->categories,
            'pageNumber' => (int) $pageNumber,
            'pagesCount' => $result->posts->lastPage(),
            'pageAlias' => 'znaniya',
            'page' => $page,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

}
