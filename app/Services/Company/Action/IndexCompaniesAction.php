<?php

namespace App\Services\Company\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Repositories\StaticPage\StaticPageRepositoryInterface;
use App\Services\Company\Dto\IndexCompaniesDto;

class IndexCompaniesAction
{
    public function __construct(
        protected CompanyRepositoryInterface $companyRepository,
        protected StaticPageRepositoryInterface $staticPageRepository
    )
    {}

    private const SEO_PAGE_ID = 5;

    public function run(IndexCompaniesDto $dto)
    {
        $page = $this->staticPageRepository->getById(self::SEO_PAGE_ID);
        $breadcrumbs = [['h1' => $page->breadcrumbs ?? $page->h1]];

        if ($dto->needToRender()) {
            $companies = $this->companyRepository->indexByDefault($dto);
            $companiesForStructuredData = $this->companyRepository->getForStructuredDataDefault($dto);
        } else {
            $companies = $this->companyRepository->index($dto);
            $companiesForStructuredData = $this->companyRepository->getForStructuredData($dto);
        }

        return [
            'companies' => $companies,
            'companiesForStructuredData' => $companiesForStructuredData,
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
        ];
    }
}