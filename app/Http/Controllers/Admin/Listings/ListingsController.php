<?php

namespace App\Http\Controllers\Admin\Listings;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Listings\ListingRequest;
use App\Models\Listing\Listing;
use App\Repositories\Admin\Listings\ListingsRepository;
use App\Repositories\Admin\Employees\EmployeesRepository;
use App\Repositories\Admin\Courses\CoursesRepository;
use App\Repositories\Cache\CacheRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Request;
use Throwable;
use App\Services\Breadcrumbs\BreadcrumbsConverter;

class ListingsController extends AdminController
{
    private mixed $listingRepository;

    private mixed $employeesRepository;

    private mixed $coursesRepository;

    public function __construct(
        public CacheRepositoryInterface $cacheRepository
    )
    {
        $this->listingRepository = new ListingsRepository;
        $this->employeesRepository = new EmployeesRepository;
        $this->coursesRepository = new CoursesRepository;
    }

    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index() : View
    {
        $listings = $this->listingRepository->getAllListingsForShow();

        $breadcrumbs = [['h1' => 'Листинги']];

        return view('admin.v2.listings.index', compact('listings', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create() : View
    {
        $breadcrumbs = [
            ['h1' => 'Листинги', 'link' => route('admin.listings.index')],
            ['h1' => 'Создание']
        ];

        $employees = $this->employeesRepository->getEmployeesForSelect();

        return view('admin.v2.listings.create', compact( 'breadcrumbs', 'employees'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ListingRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(ListingRequest $request) : RedirectResponse
    {
        $errors = $request->getErrors();
        if (count($errors) > 0) {
            return back()->withInput()->with('flash_warning', json_encode($errors));
        }

        $data = $request->all();
        $data = emptyDataToNull($data);
        $data['breadcrumbs'] = BreadcrumbsConverter::put($data['url'], $data['h1']);
        if (!isset($data['rating_count'])) {
            $data['rating_count'] = 0;
        }

        if (!isset($data['title'])) {
            $data['title'] = $data['h1'];
        }

        if (!isset($data['description'])) {
            $data['description'] = $data['lead'];
        }

        $result = $this->listingRepository->createListing($data);

        if ($result) {
            $this->cacheRepository->bulkRemove(Listing::CACHE_KEYS);
            return redirect()
                ->route('admin.listings.index')
                ->with('flash_success', 'Листинг создан!');
        } else {
            return redirect()
                ->route('admin.listings.index')
                ->with('flash_errors', 'Ошибка создания!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     * @param string $id
     * @return View
     */
    public function edit(string $id) : View
    {
        $item = $this->listingRepository->find($id);

        if ($item == null) {
            abort(404);
        }

        $employees = $this->employeesRepository->getEmployeesForSelect();

        $breadcrumbs = [
            ['h1' => 'Листиинги', 'link' => route('admin.listings.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.listings.edit', compact('item', 'employees', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     * @param ListingRequest $request
     * @param string $id
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(ListingRequest $request, string $id) : RedirectResponse
    {
        $errors = $request->getErrors();
        if (count($errors) > 0) {
            return back()->withInput()->with('flash_warning', json_encode($errors));
        }

        $data = $request->all();
        $data = emptyDataToNull($data);
        if (!isset($data['rating_count'])) {
            $data['rating_count'] = 0;
        }

        if (!isset($data['title'])) {
            $data['title'] = $data['h1'];
        }

        if (!isset($data['description'])) {
            $data['description'] = $data['lead'];
        }

        $result = $this->listingRepository->updateListing($id, $data);

        if ($result) {
            $this->cacheRepository->bulkRemove(Listing::CACHE_KEYS);

            return redirect()
                ->route('admin.listings.index')
                ->with('flash_success', 'Листинг обнавлен!');
        } else {
            return redirect()
                ->route('admin.listings.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param string $id
     * @return RedirectResponse
     * @throws Throwable
     */
    public function destroy(string $id) : RedirectResponse
    {
        $result = $this->listingRepository->deleteListing($id);

        if ($result) {
            $this->cacheRepository->bulkRemove(Listing::CACHE_KEYS);

            return redirect()
                ->route('admin.listings.index')
                ->with('flash_success', 'Листинг удалена!');
        } else {
            return redirect()
                ->route('admin.listings.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return View
     */
    public function coursesList(int $id) : View
    {
        $courses = $this->coursesRepository->getAllCoursesForListing($id);
        $currentCourses = []; // todo

        $breadcrumbs = [
            ['h1' => 'Листиинги', 'link' => route('admin.listings.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.listings.courses', compact('id', 'courses', 'currentCourses', 'breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return View
     */
    public function coursesListForEdit(int $id) : View
    {
        $courses = $this->coursesRepository->getAllCoursesForListing($id);
        $allCourses = $this->coursesRepository->getAll();

        $existedIds = $courses->pluck('id');
        foreach ($allCourses as $course) {
            if ($existedIds->contains($course->id)) {
                $course->checked = true;
            }
        }
        $breadcrumbs = [
            ['h1' => 'Листиинги', 'link' => route('admin.listings.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.listings.courses-edit', compact('id', 'courses', 'allCourses', 'breadcrumbs'));
    }

    public function updateCoursesSort(FormRequest $request, $id): RedirectResponse
    {
        $data = $request->all()['course'] ?? [];

        $dataForSort = [];

        foreach ($data as $key => $value) {
            $dataForSort[] = [
                'listing_id' => $id,
                'course_id' => $key,
                'sort' => $value
            ];
        }

        $result = $this->listingRepository->syncCourses($id, $dataForSort);

        if ($result) {
            return redirect()
                ->route('admin.listings.edit',$id)
                ->with('flash_success', 'Ранжирование обнавлен!');
        } else {
            return redirect()
                ->route('admin.listings.edit',$id)
                ->with('flash_errors', 'Ошибка Ранжирования!');
        }
    }


    public function updateListingCourses(FormRequest $request, $id): RedirectResponse
    {
        $data = $request->all()['courses'] ?? [];

        $existedCourses = $this->listingRepository->getListingCoursesByListingId($id);
        $dataForSave = [];

        foreach ($data as $courseId) {
            $existedData = $existedCourses->where('course_id', $courseId)->first();

            $dataForSave[] = [
                'listing_id' => $id,
                'course_id' => $courseId,
                'sort' => !is_null($existedData) ? $existedData->sort : 100
            ];
        }

        $result = DB::transaction(function() use($id, $dataForSave): bool
        {
            return $this->listingRepository->syncCourses($id, $dataForSave);
        });

        if ($result) {
            return redirect()
                ->route('admin.listings.edit',$id)
                ->with('flash_success', 'Список курсов обнавлен!');
        } else {
            return redirect()
                ->route('admin.listings.edit',$id)
                ->with('flash_errors', 'Ошибка обновления списка !');
        }
    }

    public function coursesListUpdate(int $id) : RedirectResponse
    {
        // todo
        return redirect()
            ->route('admin.listings.index')
            ->with('flash_success', 'Курсы перепривязаны к листингу!');
    }
}
