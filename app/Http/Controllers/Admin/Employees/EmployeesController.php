<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Repositories\Admin\Employees\EmployeesRepository;

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
