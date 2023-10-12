<?php

namespace App\Repositories\StaticPage;

use App\Models\StaticPages\StaticPage;

interface StaticPageRepositoryInterface
{
    public function getByBreadcrumbs(string $breadcrumbs): StaticPage;
    public function save(StaticPage $page): bool;
    public function getById(int $id): StaticPage;

}