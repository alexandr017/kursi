<?php

namespace App\Http\Controllers\Site\V3\IndexPage;

use App\Http\Controllers\Controller;
use App\Services\MainPage\Action\IndexMainPageAction;

class IndexPageController extends Controller
{
    public function index(
        IndexMainPageAction $action
    ) {
        $data = $action->run();

        return view('site.v3.templates.mainpage.mainpage',[
            'listings' => $data->listings,
            'popularCourses' => $data->popularCourses,
            'withPromotionCourses' => $data->withPromotionCourses,
            'reviews' => $data->reviews,
            'posts' => $data->posts,
            ]);
    }
}
