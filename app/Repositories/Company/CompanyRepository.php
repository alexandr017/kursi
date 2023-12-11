<?php

namespace App\Repositories\Company;

use App\Exceptions\Company\CompanyNotFoundException;
use App\Exceptions\SavingErrorException;
use App\Models\Companies\Company;
use App\Models\Companies\SchoolReview;
use App\Services\Company\Dto\IndexCompaniesDto;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository
{
    private function query(): Builder
    {
        return Company::query();
    }

    private function reviewsQuery(): Builder
    {
        return SchoolReview::query();
    }

    private function indexQuery(IndexCompaniesDto $dto): Builder
    {
        $query = $this->query();

        $query->where('status', 1)
            ->withCount('courses')
            ->with(['url']);


        return $query;
    }

    public function getCompany(int $id): Company
    {
        $company = $this->query()
            ->where('id',  $id)
            ->where('status',1)
            ->withCount('courses')
            ->with([
                'reviews' => function($query) {
                    $query->orderBy('sort', 'desc')
                        ->limit(2);
                    },
                'reviewsStructuredData' => function($query) {
                    $query->orderBy('sort', 'desc')
                        ->limit(100);
                    },
                'courses' => function($query) {
                 $query->limit(10); //ToDo: Need to get parameter in sync and make filter via that parameter;
                 $query->with(['tags', 'school.url']);
               },
                'coursesStructuredData' => function($query) {
                 $query->limit(100); //ToDo: Need to get parameter in sync and make filter via that parameter;
                 $query->with(['tags', 'school.url']);
               }
            ])->whereNull('deleted_at')
            ->first();

        if (is_null($company)) {
            throw new CompanyNotFoundException();
        }

        return $company;
    }

    public function getCompanyReviews(IndexCompanyReviewsDto $dto): LengthAwarePaginator
    {
        $query = $this->reviewsQuery()
            ->where('status', 1)
            ->where('school_id', $dto->companyId)->with(['company']);

        if ($dto->sortKey) {
            $query->orderBy($dto->sortKey, $dto->sortValue);
        }

        return $query->paginate(
            $dto->perPage,
            ['*'],
            'page',
            $dto->page
        );
    }

    public function saveReview(SchoolReview $review): bool
    {
        if (!$review->save()) {
            throw new SavingErrorException();
        }

        return true;
    }

    public function index(IndexCompaniesDto $dto): LengthAwarePaginator
    {
        $query = $this->indexQuery($dto);

        if ($dto->sortKey) {
            $query->orderBy($dto->sortKey, $dto->sortValue);
        } else {
            $query->orderBy('sort_order', 'desc');
        }

        return $query->paginate(
            $dto->perPage,
            ['*'],
            'page',
            $dto->page
        );
    }

    public function indexByDefault(IndexCompaniesDto $dto): LengthAwarePaginator
    {
        $query = $this->indexQuery($dto);

        return $query->paginate(
            $dto->perPage,
            ['*'],
            'page',
            $dto->page
        );
    }

    public function getForStructuredData(IndexCompaniesDto $dto): Collection
    {
        $query = $this->indexQuery($dto);

        if ($dto->sortKey) {
            $query->orderBy($dto->sortKey, $dto->sortValue);
        } else {
            $query->orderBy('sort_order', 'desc');
        }

        return $query->limit(100)
            ->get();
    }

    public function getForStructuredDataDefault(IndexCompaniesDto $dto): Collection
    {
        $query = $this->indexQuery($dto);

        return $query->limit(100)
            ->get();
    }

    public function getPopularReviews(): Collection
    {
        return $this->reviewsQuery()
            ->with(['company.url'])
            ->orderByDesc('rating')
            ->limit(15)
            ->get();
    }

    public function getPopularReviewsForStructuredData(): Collection
    {
        return $this->reviewsQuery()
            ->with(['company'])
            ->orderByDesc('rating')
            ->limit(100)
            ->get();
    }

    public function getBySearch(string $q, int $page = 1): LengthAwarePaginator
    {
        return $this->query()
            ->where('status',1)
            ->withCount('reviews')
            ->withCount('courses')
            ->whereNull('deleted_at')
            ->where('name','like', "%$q%")
            ->orWhere('content','like', "%$q%")
            ->paginate(
                2,
                ['*'],
                'page',
                $page
            );
    }

    public function getActivesCount(): int
    {
        return $this->query()
            ->where('status', 1)
            ->whereNull('deleted_at')
            ->count();
    }

    public function getActivesReviewsCount(): int
    {
        return $this->reviewsQuery()
            ->where('status', 1)
            ->count();
    }
}