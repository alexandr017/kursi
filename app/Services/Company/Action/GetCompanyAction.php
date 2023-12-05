<?php

namespace App\Services\Company\Action;

use App\Exceptions\Company\CompanyNotFoundException;
use App\Repositories\Company\CompanyRepositoryInterface;

class GetCompanyAction
{
    public function __construct(protected CompanyRepositoryInterface $companyRepository)
    {
    }

    public function run(int $sectionId)
    {
        try {
            return $this->companyRepository->getCompany($sectionId);

        } catch (CompanyNotFoundException) {
            abort(404);
        }
    }
}