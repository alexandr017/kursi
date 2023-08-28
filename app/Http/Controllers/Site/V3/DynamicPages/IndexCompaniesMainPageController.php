<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\IndexCompaniesRequest;
use App\Services\Company\Action\IndexCompaniesAction;
use App\Services\Company\Dto\IndexCompaniesDto;

class IndexCompaniesMainPageController extends Controller
{
    public function index(
        IndexCompaniesRequest $request,
        IndexCompaniesAction $action
    ) {
//        dd(888888888);
        $dto = IndexCompaniesDto::fromRequest($request);
        $companies = $action->run($dto);

//        dd($dto->needToRender());
        return  $dto->needToRender() ?
            view('site.v3.templates.company.companies', compact('companies')) :
            view('site.v3.templates.company.company-catalog-section', compact('companies'));
    }
}