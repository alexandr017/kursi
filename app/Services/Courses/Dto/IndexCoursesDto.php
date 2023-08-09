<?php

namespace App\Services\Courses\Dto;

use App\Http\Requests\Courses\IndexCoursesRequest;
use Spatie\DataTransferObject\DataTransferObject;

class IndexCoursesDto extends DataTransferObject
{
    public int $listingId;
    public ?string $sortKey;
    public ?string $sortValue;
    public ?array $tags;
    public int $page;
    public int $perPage;

    public static function fromRequest(IndexCoursesRequest $request): self
    {
        return new self(
            listingId: $request->getListingId(),
            sortKey: $request->getSortKey(),
            sortValue: $request->getSortValue() ?? 'asc',
            tags: $request->getTags(),
            page: $request->getPage() ?? 1,
            perPage: $request->getPerPage() ?? 5
        );
    }
}