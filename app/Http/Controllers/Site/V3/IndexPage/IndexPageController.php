<?php

namespace App\Http\Controllers\Site\V3\IndexPage;

use App\Http\Controllers\Controller;
use App\Models\Users\UserRole;
use App\Services\MainPage\Action\IndexMainPageAction;

class IndexPageController extends Controller
{
    public function index(
        IndexMainPageAction $action
    ) {
        $data = $action->run();

        $PAGE_ID = 1;
        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/static-pages/$PAGE_ID/edit";
        }

        return view('site.v3.templates.mainpage.mainpage',[
            'listings' => $data->listings,
            'popularCourses' => $data->popularCourses,
            'withPromotionCourses' => $data->withPromotionCourses,
            'reviews' => $data->reviews,
            'posts' => $data->posts,
            'postsForStructuredData' => $data->postsForStructuredData,
            'reviewsForStructuredData' => $data->reviewsForStructuredData,
            'withPromotionCoursesForStructuredData' => $data->withPromotionCoursesForStructuredData,
            'popularCoursesForStructuredData' => $data->popularCoursesForStructuredData,
            'editLink' => $editLink,
            'page' => $data->page
            ]);
    }
}
