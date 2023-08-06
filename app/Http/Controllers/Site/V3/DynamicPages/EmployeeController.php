<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use Illuminate\Http\Request;
use App\Models\Team\Employee;

// Dynamic type 4
class EmployeeController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $employee = Employee::where(['id' => $sectionID, 'status' => 1])
            ->whereNull('deleted_at')
            ->first();

        if ($employee == null) {
            abort('404');
        }

        $breadcrumbs = BreadcrumbsRender::get($employee->breadcrumb, $employee->h1);

        return view('site.v3.templates.about.team.employee', compact('employee', 'breadcrumbs'));
    }
}
