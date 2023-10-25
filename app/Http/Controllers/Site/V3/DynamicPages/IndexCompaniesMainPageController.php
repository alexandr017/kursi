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

        // todo: можно написать более красиво через репозиторий
        $page = \DB::table('seo_for_pages')->where(['id' => self::SEO_PAGE_ID])->first();

        $breadcrumbs = [['h1' => $page->breadcrumbs ?? $page->h1]];
        return  $dto->needToRender() ?
            view('site.v3.templates.company.companies', [
                'companies' =>$companies['companies'],
                'companiesForStructuredData' => $companies['companiesForStructuredData'],
                'breadcrumbs' => $breadcrumbs,
                'page' => $page]
            ) :
            view('site.v3.templates.company.company-catalog-section', ['companies' => $companies['companiesForStructuredData']]);
    }
}
