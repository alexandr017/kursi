<?php

namespace App\Services\MainPage\Dto;

use App\Models\StaticPages\StaticPage;
use Illuminate\Support\Collection;
use Spatie\DataTransferObject\DataTransferObject;

class IndexMainPageDataDto extends DataTransferObject
{
    public Collection $listings;
    public Collection $popularCourses;
    public Collection $withPromotionCourses;
    public Collection $reviews;
    public Collection $posts;
    public Collection $popularCoursesForStructuredData;
    public Collection $withPromotionCoursesForStructuredData;
    public Collection $reviewsForStructuredData;
    public Collection $postsForStructuredData;
    public StaticPage $page;
}