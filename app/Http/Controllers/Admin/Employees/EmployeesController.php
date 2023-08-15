<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Controllers\Admin\AdminController;
use App\Repositories\Admin\Employees\EmployeesRepository;
use App\Http\Requests\Admin\Employees\EmployeeRequest;

class EmployeesController extends AdminController
{
    private mixed $employeesRepository;

    public function __construct()
    {
        $this->employeesRepository = app(EmployeesRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = $this->employeesRepository->getAllEmployeesForShow();

        $breadcrumbs = [['h1' => 'Сотрудники']];

        return view('admin.v2.employees.index', compact('employees', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['h1' => 'Сотрудники', 'link' => route('admin.employees.index')],
            ['h1' => 'Создание'],
        ];

        return view('admin.v2.employees.create', compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->employeesRepository->createEmployee($data);

        if ($result) {
            return redirect()
                ->route('admin.employees.index')
                ->with('flash_success', 'Сотрудник добавлен!');
        } else {
            return redirect()
                ->route('admin.employees.index')
                ->with('flash_errors', 'Ошибка добавления!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->employeesRepository->find($id);

        $breadcrumbs = [
            ['h1' => 'Сотрудники', 'link' => route('admin.employees.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.employees.edit', compact('item', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, string $id)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->employeesRepository->updateEmployee($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.employees.index')
                ->with('flash_success', 'Сотрудник обнавлен!');
        } else {
            return redirect()
                ->route('admin.employees.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->employeesRepository->deleteEmployee($id);

        if ($result) {
            return redirect()
                ->route('admin.employees.index')
                ->with('flash_success', 'Сотрудник удален!');
        } else {
            return redirect()
                ->route('admin.employees.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
