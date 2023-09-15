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
        $reviews = $this->companyRepository->getReviewsByCompanyId($dto->companyId);

        $company = $this->companyRepository->getCompany($dto->companyId);

        $sumRating = $reviews->sum('rating');
        $avg = $sumRating / $reviews->count();

        $company->setRatingValue($avg);
        $company->setRatingCount($reviews->count());

        $this->companyRepository->save($company);
    }
}