<?php

namespace App\Services\PostCategory\Dto;

use App\Http\Requests\Blog\IndexBlogRequest;
use Spatie\DataTransferObject\DataTransferObject;

class IndexPostCategoryDto extends DataTransferObject
{
    public int $page = 1;
    public int $perPage = 6;
    public ?int $sectionId;

    public static function fromBlogIndexRequest(IndexBlogRequest $request): self
    {
        return new self(
            page: $request->getPage() ?? 1,
            perPage: $request->getPerPage() ?? 6
        );
    }
}