<?php

namespace App\Repositories\Company;

use App\Exceptions\Company\CompanyNotFoundException;
use App\Exceptions\SavingErrorException;
use App\Models\Companies\Company;
use App\Models\Companies\SchoolReview;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository implements CompanyRepositoryInterface
{
    private function query(): Builder
    {
        return Company::query();
    }

    private function reviewsQuery(): Builder
    {
        return SchoolReview::query();
    }

    public function getCompany(int $id): Company
    {
        $company = $this->query()
            ->where('id',  $id)
            ->where('status',1)
            ->withCount('reviews')
            ->withCount('courses')
            ->with([
                'reviews' => function($query) {
                    $query->orderBy('sort', 'desc')
                        ->limit(2);
                    },
                'courses' => function($query) {
                 $query->limit(10); //ToDo: Need to get parameter in sync and make filter via that parameter;
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
}