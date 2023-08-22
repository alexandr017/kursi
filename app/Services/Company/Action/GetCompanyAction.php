<?php

namespace App\Services\Company\Action;

use App\Repositories\Company\CompanyRepositoryInterface;

class GetCompanyAction
{
    public function __construct(protected CompanyRepositoryInterface $companyRepository)
    {
    }

    public function run(int $sectionId)
    {
        return $this->companyRepository->getCompany($sectionId);
    }
}