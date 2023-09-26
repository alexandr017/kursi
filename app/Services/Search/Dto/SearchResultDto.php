<?php

namespace App\Services\Search\Dto;

use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\DataTransferObject\DataTransferObject;

class SearchResultDto extends DataTransferObject
{
    public LengthAwarePaginator $courses;
    public LengthAwarePaginator $posts;
    public LengthAwarePaginator $companies;

}