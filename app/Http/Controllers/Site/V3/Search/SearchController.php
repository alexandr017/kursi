<?php

namespace App\Http\Controllers\Site\V3\Search;

use App\Http\Controllers\Controller;
use App\Http\Requests\Search\SearchRequest;
use App\Services\Search\Action\SearchAction;
use App\Services\Search\Action\SearchCompaniesAction;
use App\Services\Search\Action\SearchCoursesAction;
use App\Services\Search\Action\SearchPostsAction;

class SearchController extends Controller
{
    public function search(
        SearchRequest $request,
        SearchAction $action
    ) {
        $result = $action->run($request->getQ());
        return view('site.v3.templates.search.search', [
            'companies' => $result->companies,
            'posts' => $result->posts,
            'courses' => $result->courses,
        ]);
    }

    public function searchCourses(
        SearchRequest $request,
        SearchCoursesAction $action
    ) {
        $courses = $action->run($request->getQ(), $request->getPage());

        return view('site.v3.modules.search.search-courses', compact('courses'));
    }

    public function searchCompanies(
        SearchRequest $request,
        SearchCompaniesAction $action
    ) {
        $companies = $action->run($request->getQ(), $request->getPage());

        return view('site.v3.modules.search.search-courses', compact('companies'));

    }

    public function searchPosts(
        SearchRequest $request,
        SearchPostsAction $action
    ) {
        $posts = $action->run($request->getQ(), $request->getPage());

        return view('site.v3.modules.search.search-courses', compact('posts'));
    }
}