<?php

namespace App\Http\Controllers\Site\V3\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\IndexCoursesRequest;
use App\Services\Courses\Actions\IndexCoursesAction;
use App\Services\Courses\Dto\IndexCoursesDto;

class CoursesController extends Controller
{
    public function index(
        IndexCoursesRequest $request,
        IndexCoursesAction $indexCoursesAction
    ) {
        $dto  = IndexCoursesDto::fromRequest($request);
        $courses = $indexCoursesAction->run($dto);

        return view('site.v3.modules.courses.courses', compact('courses'));
    }
}