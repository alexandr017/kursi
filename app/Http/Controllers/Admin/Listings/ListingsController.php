<?php

namespace App\Http\Controllers\Admin\Listings;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Listings\ListingRequest;
use App\Repositories\Admin\Listings\ListingsRepository;
use App\Repositories\Admin\Employees\EmployeesRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ListingsController extends AdminController
{
    private mixed $listingRepository;

    private mixed $employeesRepository;

    public function __construct()
    {
        $this->listingRepository = new ListingsRepository;
        $this->employeesRepository = new EmployeesRepository;
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
     */
    public function store(ListingRequest $request) : RedirectResponse
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->listingRepository->createListing($data);

        if ($result) {
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
     */
    public function update(ListingRequest $request, string $id) : RedirectResponse
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->listingRepository->updateListing($id, $data);

        if ($result) {
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
     */
    public function destroy(string $id) : RedirectResponse
    {
        $result = $this->listingRepository->deleteListing($id);

        if ($result) {
            return redirect()
                ->route('admin.listings.index')
                ->with('flash_success', 'Листинг удалена!');
        } else {
            return redirect()
                ->route('admin.listings.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
