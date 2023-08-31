<?php

namespace App\Services\MainPage\Dto;

use Illuminate\Support\Collection;
use Spatie\DataTransferObject\DataTransferObject;

class IndexMainPageDataDto extends DataTransferObject
{
    public Collection $listings;
    public Collection $popularCourses;
    public Collection $withPromotionCourses;
    public Collection $reviews;
    public Collection $posts;
}