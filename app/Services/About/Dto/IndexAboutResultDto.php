<?php

namespace App\Services\About\Dto;

use App\Models\StaticPages\StaticPage;
use Illuminate\Support\Collection;
use Spatie\DataTransferObject\DataTransferObject;

class IndexAboutResultDto extends DataTransferObject
{
    public StaticPage $page;
    public int $companiesCount;
    public int $coursesCount;
    public int $employeesCount;
    public int $reviewsCount;
    public Collection $team;
    public Collection $history;
    public array $breadcrumbs;
}