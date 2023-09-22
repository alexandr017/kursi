<?php

namespace App\Http\Controllers\Site\V3\BlogIndexPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\IndexBlogRequest;
use App\Services\PostCategory\Action\IndexPostCategoryAction;
use App\Services\PostCategory\Dto\IndexPostCategoryDto;

class BlogIndexPageController extends Controller
{
    public function index(
        IndexBlogRequest $request,
        IndexPostCategoryAction $action,
        $pageNumber = 1
    ) {
        $dto = IndexPostCategoryDto::fromBlogIndexRequest($request, page: $pageNumber);
        $result = $action->run($dto);

        return view('site.v3.templates.blog.category', [
            'posts' => $result->posts,
            'category' => $result->category,
            'categories' => $result->categories,
            'pageNumber' => (int) $pageNumber,
            'pagesCount' => $result->posts->lastPage(),
            'pageAlias' => 'znaniya',
        ]);
    }

}
