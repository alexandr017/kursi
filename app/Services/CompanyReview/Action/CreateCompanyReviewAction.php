<?php

namespace App\Services\CompanyReview\Action;

use App\Models\Companies\SchoolReview;
use App\Repositories\Company\CompanyRepositoryInterface;
use App\Services\CompanyReview\Dto\CreateCompanyReviewDto;
use DB;

class CreateCompanyReviewAction
{
    public function __construct(protected CompanyRepositoryInterface $companyRepository)
    {}

    public function run(CreateCompanyReviewDto $dto): void
    {
        $review = SchoolReview::create($dto);
        $company = $this->companyRepository->getCompany($dto->companyId);
        $company->incrementRatingCount();

        DB::transaction(function () use ($review, $company) {
            $this->companyRepository->saveReview($review);
            $this->companyRepository->saveCompany($company);
        });
    }
}