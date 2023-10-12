<?php

namespace App\Repositories\StaticPage;

use App\Exceptions\SavingErrorException;
use App\Models\StaticPages\StaticPage;
use Illuminate\Database\Eloquent\Builder;

class StaticPageRepository implements StaticPageRepositoryInterface
{
    public function query(): Builder
    {
        return StaticPage::query();
    }

    public function getByBreadcrumbs(string $breadcrumbs): StaticPage
    {
        return $this->query()
            ->where('breadcrumbs', $breadcrumbs)
            ->first();
    }

    public function getById(int $id): StaticPage
    {
        return $this->query()
            ->where('id', $id)
            ->first();
    }

    public function save(StaticPage $page): bool
    {
        if (!$page->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}