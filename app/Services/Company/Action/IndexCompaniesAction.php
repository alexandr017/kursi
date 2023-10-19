<?php

namespace App\Services\Company\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Services\Company\Dto\IndexCompaniesDto;

class IndexCompaniesAction
{
    public function __construct(protected CompanyRepositoryInterface $companyRepository)
    {}

    public function run(IndexCompaniesDto $dto)
    {
        return [
            'companies' => $this->companyRepository->index($dto),
            'companiesForStructuredData' => $this->companyRepository->getForStructuredData($dto),
        ];
    }
}