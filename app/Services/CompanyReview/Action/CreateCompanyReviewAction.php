<?php

namespace App\Services\CompanyReview\Action;

use App\Models\Companies\SchoolReview;
use App\Repositories\Company\CompanyRepositoryInterface;
use App\Services\CompanyReview\Dto\CreateCompanyReviewDto;

class CreateCompanyReviewAction
{
    public function __construct(protected CompanyRepositoryInterface $companyRepository)
    {}

    public function run(CreateCompanyReviewDto $dto): void
    {
        $review = SchoolReview::create($dto);

        $this->companyRepository->saveReview($review);
    }
}