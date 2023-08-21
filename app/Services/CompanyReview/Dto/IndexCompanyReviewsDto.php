<?php

namespace App\Services\CompanyReview\Dto;

use App\Http\Requests\CompanyReview\CompanyReviewRequest;
use Spatie\DataTransferObject\DataTransferObject;

class IndexCompanyReviewsDto extends DataTransferObject
{
    public int $companyId;
    public ?string $sortKey;
    public ?string $sortValue;
    public int $page;
    public int $perPage;

    public static function fromRequest(CompanyReviewRequest $request): self
    {
        return new self(
            companyId: $request->getCompanyId(),
            sortKey: $request->getSortKey(),
            sortValue: $request->getSortValue() ?? 'asc',
            page: $request->getPage() ?? 1,
            perPage: $request->getPerPage() ?? 2
        );
    }
}