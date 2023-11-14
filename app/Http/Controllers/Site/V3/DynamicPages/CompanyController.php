<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Users\UserRole;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\Company\Action\GetCompanyAction;
use App\Models\Companies\Company;

// Dynamic type 5
class CompanyController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $action = resolve(GetCompanyAction::class);
        $company = $action->run($sectionID);

        $breadcrumbs = BreadcrumbsRender::get($company->breadcrumbs, $company->h1);
        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/listings/{$company->id}/edit";
        }

        return view('site.v3.templates.company.company', compact('company', 'breadcrumbs', 'editLink'));
    }
}
