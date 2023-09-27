<?php

namespace App\Services\Search\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchCompaniesAction
{
    public function __construct(
        protected CompanyRepositoryInterface $companyRepository,
    ) {}

    public function run(string $q, int $page): LengthAwarePaginator
    {
        return $this->companyRepository->getBySearch($q, $page);
    }
}