<?php

namespace App\Services\PostCategory\Dto;

use App\Models\Posts\PostCategory;
use App\Models\StaticPages\StaticPage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\DataTransferObject\DataTransferObject;

class PostCategoryDataDto extends DataTransferObject
{
    public ?PostCategory $category;
    public Collection $categories;
    public LengthAwarePaginator $posts;
    public array $breadcrumbs;
    public StaticPage $page;
}