<?php

namespace App\Repositories\Company;

use App\Models\Companies\Company;
use App\Models\Companies\SchoolReview;
use App\Services\Company\Dto\IndexCompaniesDto;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface CompanyRepositoryInterface
{
    public function getCompany(int $id): Company;
    public function getCompanyReviews(IndexCompanyReviewsDto $dto): LengthAwarePaginator;
    public function saveReview(SchoolReview $review): bool;
    public function index(IndexCompaniesDto $dto): LengthAwarePaginator;
    public function getForStructuredData(IndexCompaniesDto $dto): Collection;
    public function getPopularReviews(): Collection;
    public function getPopularReviewsForStructuredData(): Collection;
    public function getBySearch(string $q, int $page = 1): LengthAwarePaginator;
    public function saveCompany(Company $company): bool;
}