<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Courses\Course;
use App\Repositories\Admin\Courses\CoursesRepository;
use App\Repositories\Admin\Companies\CompaniesRepository;
use App\Http\Requests\Admin\Course\CoursesRequest;
use App\Repositories\Admin\Listings\ListingsRepository;
use App\Repositories\Cache\CacheRepositoryInterface;
use App\Repositories\Tags\TagRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CoursesController extends AdminController
{
    private mixed $coursesRepository;
    private mixed $companiesRepository;
    private mixed $listingRepository;

    public function __construct(
        private TagRepositoryInterface $tagRepository,
        public CacheRepositoryInterface $cacheRepository
    )
    {
        $this->coursesRepository = new CoursesRepository;
        $this->companiesRepository = new CompaniesRepository;
        $this->listingRepository = new ListingsRepository;
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
        $listings = $this->listingRepository->getAllListingsForCourses();
        $tags = $this->tagRepository->getAll();

        $breadcrumbs = [
            ['h1' => 'Курсы', 'link' => route('admin.courses.index')],
            ['h1' => 'Создание'],
        ];

        return view('admin.v2.courses.courses.create', compact('breadcrumbs', 'companies', 'listings', 'tags'));
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
        $listingsIds = $data['listings'] ?? [];

        if ($data['sale_cost'] == 0 && $data['cost'] != 0) {
            if ($data['sale_value'] != 0) {
                $data['sale_cost'] = $data['cost'] * $data['sale_value'] / 100;
            } else {
                $data['sale_cost'] = $data['cost'];
            }
        }

        if ($request->has('no_duration')) {
            $data['no_duration'] = 1;
        } else {
            $data['no_duration'] = 0;
        }

        $result = $this->coursesRepository->createCourse($data);
        $this->coursesRepository->syncTags($result, $data['tags'] ?? []);

        if ($result) {
            $listingCourseData = [];
            foreach ($listingsIds as $listingId) {
                $listingCourseData[] = [
                    'listing_id' => $listingId,
                    'course_id' => $result->id,
                    'sort' => 100,
                ];
            }

            $this->coursesRepository->syncListings($result->id, $listingCourseData);
        }

        if ($result) {
            $this->cacheRepository->bulkRemove(Course::CACHE_KEYS);

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
        $listings = $this->listingRepository->getAllListingsForCourses();
        $tags = $this->tagRepository->getAll();

        $breadcrumbs = [
            ['h1' => 'Курсы', 'link' => route('admin.courses.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.courses.courses.edit', compact('item', 'breadcrumbs', 'companies', 'listings', 'tags'));
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

        if ($data['sale_cost'] == 0 && $data['cost'] != 0) {
            if ($data['sale_value'] != 0) {
                $data['sale_cost'] = $data['cost'] * $data['sale_value'] / 100;
            } else {
                $data['sale_cost'] = $data['cost'];
            }
        }

        if ($request->has('no_duration')) {
            $data['no_duration'] = 1;
        } else {
            $data['no_duration'] = 0;
        }

        $result = $this->coursesRepository->updateCourse($id, $data);
        $this->coursesRepository->syncTags($result, $data['tags'] ?? []);

        $listingsIds = $data['listings'] ?? [];

        if ($result) {
            $listingCourseData = [];
            foreach ($listingsIds as $listingId) {
                $courseListing = $result->listings->where('id', $listingId)->first();
                $listingCourseData[] = [
                    'listing_id' => (int)$listingId,
                    'course_id' => $result->id,
                    'sort' => $courseListing->pivot->sort ?? 100,
                ];
            }

            $this->coursesRepository->syncListings($result->id, $listingCourseData);
        }

        if ($result) {
            $this->cacheRepository->bulkRemove(Course::CACHE_KEYS);

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
            $this->cacheRepository->bulkRemove(Course::CACHE_KEYS);

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
