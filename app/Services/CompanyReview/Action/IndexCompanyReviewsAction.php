<?php

namespace App\Services\CompanyReview\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;

class IndexCompanyReviewsAction
{
    public function __construct(protected CompanyRepositoryInterface $companyRepository)
    {}

    public function run(IndexCompanyReviewsDto $dto)
    {
        return $this->companyRepository->getCompanyReviews($dto);
    }
}