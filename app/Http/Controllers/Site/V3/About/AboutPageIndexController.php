<?php

namespace App\Http\Controllers\Site\V3\About;

use App\Http\Controllers\Controller;
use App\Models\Users\UserRole;
use App\Services\About\Action\IndexAboutAction;

class AboutPageIndexController extends Controller
{
    private const SEO_PAGE_ID = 2;

    public function index(IndexAboutAction $action)
    {
        $result = $action->run();

        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/static-pages/" . self::SEO_PAGE_ID . "/edit";
        }

        return view(
            'site.v3.templates.about.index.index-page', [
                'page' => $result->page,
                'countSchools' => $result->companiesCount,
                'coursesCount' => $result->coursesCount,
                'employeesCount' => $result->employeesCount,
                'reviewsCount' => $result->reviewsCount,
                'team' => $result->team,
                'histories' => $result->history,
                'breadcrumbs' => $result->breadcrumbs,
                'editLink' => $editLink
            ]
        );
    }
}
