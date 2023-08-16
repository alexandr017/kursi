<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Admin\AdminController;
use App\Repositories\Admin\Courses\CourseTagsRepository;
use App\Http\Requests\Admin\Course\CourseTagRequest;
use App\Repositories\Admin\Employees\EmployeesRepository;

class CourseTagsController extends AdminController
{
    private mixed $courseTagRepository;

    public function __construct()
    {
        $this->courseTagRepository = app(CourseTagsRepository::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = $this->courseTagRepository->getAllTagsForShow();

        $breadcrumbs = [['h1' => 'Теги курсов']];

        return view('admin.v2.courses.tags.index', compact('tags', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
