<?php

namespace App\Http\Controllers\Admin\Companies;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Companies\CompanyRequest;
use App\Models\Companies\Company;
use App\Repositories\Admin\Companies\CompaniesRepository;
use App\Repositories\Cache\CacheRepositoryInterface;
use App\Services\Breadcrumbs\BreadcrumbsConverter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Throwable;

class CompaniesController extends AdminController
{
    private mixed $companyRepository;

    public function __construct(
        public CacheRepositoryInterface $cacheRepository
    )
    {
        $this->companyRepository = new CompaniesRepository;
    }

    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index() : View
    {
        $companies = $this->companyRepository->getAllCompaniesForShow();

        $breadcrumbs = [['h1' => 'Компании']];

        return view('admin.v2.companies.companies.index', compact('companies', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create() : View
    {
        $breadcrumbs = [
            ['h1' => 'Компании', 'link' => route('admin.companies.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.companies.companies.create', compact( 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     * @param CompanyRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(CompanyRequest $request) : RedirectResponse
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

        $data['breadcrumbs'] = BreadcrumbsConverter::put($data['url'], $data['h1']);
        $result = $this->companyRepository->createCompany($data);

        if ($result) {
            $this->cacheRepository->bulkRemove(Company::CACHE_KEYS);
            return redirect()
                ->route('admin.companies.index')
                ->with('flash_success', 'Компания создана!');
        } else {
            return redirect()
                ->route('admin.companies.index')
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
        $item = $this->companyRepository->find($id);

        if ($item == null) {
            abort(404);
        }

        $breadcrumbs = [
            ['h1' => 'Компании', 'link' => route('admin.companies.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.companies.companies.edit', compact('item', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     * @param CompanyRequest $request
     * @param string $id
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(CompanyRequest $request, string $id) : RedirectResponse
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
        $result = $this->companyRepository->updateCompany($id, $data);

        if ($result) {
            $this->cacheRepository->bulkRemove(Company::CACHE_KEYS);

            return redirect()
                ->route('admin.companies.index')
                ->with('flash_success', 'Компания обнавлена!');
        } else {
            return redirect()
                ->route('admin.companies.index')
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
        $result = $this->companyRepository->deleteCompany($id);

        if ($result) {
            $this->cacheRepository->bulkRemove(Company::CACHE_KEYS);

            return redirect()
                ->route('admin.companies.index')
                ->with('flash_success', 'Компания удалена!');
        } else {
            return redirect()
                ->route('admin.companies.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
