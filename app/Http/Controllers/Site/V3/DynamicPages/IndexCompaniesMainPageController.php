<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\IndexCompaniesRequest;
use App\Services\Company\Action\IndexCompaniesAction;
use App\Services\Company\Dto\IndexCompaniesDto;

class IndexCompaniesMainPageController extends Controller
{
    private const SEO_PAGE_ID = 5;

    public function index(
        IndexCompaniesRequest $request,
        IndexCompaniesAction $action
    ) {
        $dto = IndexCompaniesDto::fromRequest($request);
        $companies = $action->run($dto);

        return  $dto->needToRender() ?
            view('site.v3.templates.company.companies', [
                'companies' =>$companies['companies'],
                'companiesForStructuredData' => $companies['companiesForStructuredData'],
                'breadcrumbs' => $companies['breadcrumbs'],
                'page' => $companies['page']]
            ) :
            view('site.v3.templates.company.company-catalog-section', ['companies' => $companies['companies']]);
    }
}
