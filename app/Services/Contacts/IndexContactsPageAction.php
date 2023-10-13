<?php

namespace App\Services\Contacts;

use App\Models\StaticPages\StaticPage;
use App\Repositories\StaticPage\StaticPageRepositoryInterface;

class IndexContactsPageAction
{
    public function __construct(protected StaticPageRepositoryInterface $staticPageRepository)
    {}

    public function run(): StaticPage
    {
        return $this->staticPageRepository->getByBreadcrumbs(StaticPage::CONTACTS);
    }
}