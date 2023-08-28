<?php

namespace App\Services\Company\Dto;

use App\Http\Requests\Company\IndexCompaniesRequest;
use Spatie\DataTransferObject\DataTransferObject;

class IndexCompaniesDto extends DataTransferObject
{
    public ?string $sortKey;
    public ?string $sortValue;
    public int $page;
    public int $perPage;

    public static function fromRequest(IndexCompaniesRequest $request): self
    {
        return new self(
            sortKey: $request->getSortKey(),
            sortValue: $request->getSortValue() ?? 'asc',
            page: $request->getPage() ?? 1,
            perPage: $request->getPerPage() ?? 8
        );
    }

    public function needToRender(): bool
    {
        return is_null($this->sortKey) && $this->page == 1;
    }

}