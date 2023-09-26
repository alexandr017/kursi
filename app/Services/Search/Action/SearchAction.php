<?php

namespace App\Services\Search\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\Search\Dto\SearchResultDto;

class SearchAction
{
    public function __construct(
        protected CoursesRepositoryInterface $coursesRepository,
        protected CompanyRepositoryInterface $companyRepository,
        protected PostRepositoryInterface $postRepository
    ) {}

    public function run(string $q): SearchResultDto
    {
        $courses = $this->coursesRepository->getBySearch($q);
        $companies = $this->companyRepository->getBySearch($q);
        $posts = $this->postRepository->getBySearch($q);

        return new SearchResultDto(
            posts: $posts,
            companies: $companies,
            courses: $courses
        );
    }
}