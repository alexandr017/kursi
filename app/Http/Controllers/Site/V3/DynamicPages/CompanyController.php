<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies\Company;

// Dynamic type 5
class CompanyController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $company = Company::where(['id' => $sectionID, 'status' => 1])
            ->whereNull('deleted_at')
            ->first();

        if ($company == null) {
            abort(404);
        }

        return view('site.v3.templates.company.company', compact('company'));
    }
}
