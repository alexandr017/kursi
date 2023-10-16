<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Admin\AdminController;
use App\Repositories\Admin\Courses\CoursesRepository;
use App\Repositories\Admin\Companies\CompaniesRepository;
use App\Http\Requests\Admin\Course\CoursesRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CoursesController extends AdminController
{
    private mixed $coursesRepository;
    private mixed $companiesRepository;

    public function __construct()
    {
        $this->coursesRepository = new CoursesRepository;
        $this->companiesRepository = new CompaniesRepository;
    }

    public function index() : View
    {
        $courses = $this->coursesRepository->getAllCoursesForShow();

        $breadcrumbs = [['h1' => 'Курсы']];

        return view('admin.v2.courses.courses.index', compact('courses', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $companies = $this->companiesRepository->getCompaniesForSelect();

        $breadcrumbs = [
            ['h1' => 'Курсы', 'link' => route('admin.courses.index')],
            ['h1' => 'Создание'],
        ];

        return view('admin.v2.courses.courses.create', compact('breadcrumbs', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     * @param CoursesRequest $request
     * @return RedirectResponse
     */
    public function store(CoursesRequest $request) : RedirectResponse
    {
        $errors = $request->getErrors();
        if (count($errors) > 0) {
            return back()->withInput()->with('flash_warning', json_encode($errors));
        }

        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->coursesRepository->createCourse($data);

        if ($result) {
            return redirect()
                ->route('admin.courses.index')
                ->with('flash_success', 'Курс добавлен!');
        } else {
            return redirect()
                ->route('admin.courses.index')
                ->with('flash_errors', 'Ошибка добавления!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     * @param string $id
     * @return View
     */
    public function edit(string $id) : View
    {
        $item = $this->coursesRepository->find($id);

        if ($item == null) {
            abort(404);
        }

        $companies = $this->companiesRepository->getCompaniesForSelect();

        $breadcrumbs = [
            ['h1' => 'Курсы', 'link' => route('admin.courses.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.courses.courses.edit', compact('item', 'breadcrumbs', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     * @param CoursesRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(CoursesRequest $request, string $id) : RedirectResponse
    {
        $errors = $request->getErrors();
        if (count($errors) > 0) {
            return back()->withInput()->with('flash_warning', json_encode($errors));
        }

        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->coursesRepository->updateCourse($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.courses.index')
                ->with('flash_success', 'Курс обнавлен!');
        } else {
            return redirect()
                ->route('admin.courses.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param string $id
     * @return RedirectResponse
     */
    public function destroy(string $id) : RedirectResponse
    {
        $result = $this->coursesRepository->deleteCourse($id);
        // todo сделать удаление также и привязанных курсов (то есть из таблицы courses_tags)

        if ($result) {
            return redirect()
                ->route('admin.courses.index')
                ->with('flash_success', 'Курс удален!');
        } else {
            return redirect()
                ->route('admin.courses.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
