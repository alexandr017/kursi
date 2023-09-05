<?php

namespace App\Services\MainPage\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\MainPage\Dto\IndexMainPageDataDto;

class IndexMainPageAction
{
    public function __construct(
        protected ListingRepositoryInterface $listingRepository,
        protected CoursesRepositoryInterface $coursesRepository,
        protected CompanyRepositoryInterface $companyRepository,
        protected PostRepositoryInterface $postRepository
    )
    {}

    public function run(): IndexMainPageDataDto
    {
        $listings = $this->listingRepository->getParentsWithChildes();
        $popularCourses = $this->coursesRepository->getPopulars();
        $withPromotionCourses = $this->coursesRepository->getPromotions();
        $reviews  = $this->companyRepository->getPopularReviews();
        $posts = $this->postRepository->getPopulars();

        return new IndexMainPageDataDto(
            listings: $listings,
            popularCourses: $popularCourses,
            withPromotionCourses: $withPromotionCourses,
            reviews: $reviews,
            posts: $posts
        );
    }
}