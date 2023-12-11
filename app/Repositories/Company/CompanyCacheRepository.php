<?php

namespace App\Repositories\Company;

use App\Models\Companies\Company;
use App\Models\Companies\SchoolReview;
use App\Services\Company\Dto\IndexCompaniesDto;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class CompanyCacheRepository implements CompanyRepositoryInterface
{
    public function __construct(
        protected CompanyRepository $companyRepository
    ) {}

    public function getCompany(int $id): Company
    {
        return $this->companyRepository->getCompany($id);
    }

    public function getCompanyReviews(IndexCompanyReviewsDto $dto): LengthAwarePaginator
    {
        return $this->companyRepository->getCompanyReviews($dto);
    }

    public function saveReview(SchoolReview $review): bool
    {
        return $this->companyRepository->saveReview($review);
    }

    public function index(IndexCompaniesDto $dto): LengthAwarePaginator
    {
        return $this->companyRepository->index($dto);
    }

    public function indexByDefault(IndexCompaniesDto $dto): LengthAwarePaginator
    {
        $key = Company::CACHE_KEY_DEFAULT_INDEX;

        return Cache::remember($key, Company::CACHE_SAVE_INTERVAL, function () use ($dto) {
            return $this->companyRepository->indexByDefault($dto);
        });
    }


    public function getForStructuredData(IndexCompaniesDto $dto): Collection
    {
        return $this->companyRepository->getForStructuredData($dto);
    }

    public function getForStructuredDataDefault(IndexCompaniesDto $dto): Collection
    {
        $key = Company::CACHE_KEY_DEFAULT_FOR_STRUCTURED_DATA;

        return Cache::remember($key, Company::CACHE_SAVE_INTERVAL, function () use ($dto) {
            return $this->companyRepository->getForStructuredDataDefault($dto);
        });

    }

    public function getPopularReviews(): Collection
    {
        $key = SchoolReview::POPULARS_CACHE_KEY;

        return Cache::remember($key, SchoolReview::CACHE_SAVE_INTERVAL, function () {
            return $this->companyRepository->getPopularReviews();
        });
    }

    public function getPopularReviewsForStructuredData(): Collection
    {
        $key = SchoolReview::POPULARS_FOR_STRUCTURED_DATA_CACHE_KEY;

        return Cache::remember($key, SchoolReview::CACHE_SAVE_INTERVAL, function () {
            return $this->companyRepository->getPopularReviewsForStructuredData();
        });
    }

    public function getBySearch(string $q, int $page = 1): LengthAwarePaginator
    {
        return $this->companyRepository->getBySearch($q, $page);
    }

    public function getActivesCount(): int
    {
        $key = Company::CACHE_KEY_ACTIVES_COUNT;

        return Cache::remember($key, Company::CACHE_SAVE_INTERVAL, function () {
            return $this->companyRepository->getActivesCount();
        });
    }


    public function getActivesReviewsCount(): int
    {
        $key = SchoolReview::CACHE_KEY_ACTIVES_COUNT;

        return Cache::remember($key, Company::CACHE_SAVE_INTERVAL, function () {
            return $this->companyRepository->getActivesReviewsCount();
        });
    }
}