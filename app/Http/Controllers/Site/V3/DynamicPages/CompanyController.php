<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Services\Company\Action\GetCompanyAction;
use App\Models\Companies\Company;

// Dynamic type 5
class CompanyController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $action = resolve(GetCompanyAction::class);
        $company = $action->run($sectionID);

        return view('site.v3.templates.company.company', compact('company'));
    }
}
