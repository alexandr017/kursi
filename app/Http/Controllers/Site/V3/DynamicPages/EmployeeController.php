<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Users\UserRole;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\Employee\Action\IndexEmployeeAction;
use Illuminate\Http\Request;
use App\Models\Team\Employee;

// Dynamic type 4
class EmployeeController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $result = resolve(IndexEmployeeAction::class)->run($sectionID);

        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/employees/{$result->employee->id}/edit";
        }

        return view('site.v3.templates.about.team.employee', [
                'employee' => $result->employee,
                'breadcrumbs' => $result->breadcrumbs,
                'editLink' => $editLink,
            ]
        );
    }
}
