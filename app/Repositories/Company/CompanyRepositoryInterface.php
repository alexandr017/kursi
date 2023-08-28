<?php

namespace App\Repositories\Company;

use App\Models\Companies\Company;
use App\Models\Companies\SchoolReview;
use App\Services\Company\Dto\IndexCompaniesDto;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CompanyRepositoryInterface
{
    public function getCompany(int $id): Company;
    public function getCompanyReviews(IndexCompanyReviewsDto $dto): LengthAwarePaginator;
    public function saveReview(SchoolReview $review): bool;
    public function index(IndexCompaniesDto $dto): LengthAwarePaginator;
}