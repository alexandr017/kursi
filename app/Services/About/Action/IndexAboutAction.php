<?php

namespace App\Services\About\Action;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\Employee\EmployeeRepositoryInterface;
use App\Repositories\History\HistoryRepositoryInterface;
use App\Repositories\StaticPage\StaticPageRepositoryInterface;
use App\Services\About\Dto\IndexAboutResultDto;
use App\Services\Breadcrumbs\BreadcrumbsRender;

class IndexAboutAction
{
    private const SEO_PAGE_ID = 2;

    public function __construct(
        public StaticPageRepositoryInterface $staticPageRepository,
        public CompanyRepositoryInterface $companyRepository,
        public CoursesRepositoryInterface $coursesRepository,
        public EmployeeRepositoryInterface $employeeRepository,
        public HistoryRepositoryInterface $historyRepository
    )
    {}

    public function run()
    {
        $team = $this->employeeRepository->getAllEmployees();
        $page = $this->staticPageRepository->getById(self::SEO_PAGE_ID);

        $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);

        return new IndexAboutResultDto(
            page: $page,
            companiesCount: $this->companyRepository->getActivesCount(),
            reviewsCount: $this->companyRepository->getActivesReviewsCount(),
            coursesCount: $this->coursesRepository->getActivesCount(),
            team: $team,
            employeesCount: $team->count(),
            history: $this->historyRepository->getAll(),
            breadcrumbs: $breadcrumbs
        );
    }
}