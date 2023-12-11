<?php

namespace App\Repositories\StaticPage;

use App\Models\StaticPages\StaticPage;
use Illuminate\Support\Facades\Cache;

class StaticPageCacheRepository implements StaticPageRepositoryInterface
{

    public function __construct(
        protected StaticPageRepository $staticPageRepository
    ) {}

    public function getByBreadcrumbs(string $breadcrumbs): StaticPage
    {
        $key = StaticPage::CACHE_KEY_BY_BREADCRUMBS . $breadcrumbs;

        return Cache::remember($key, StaticPage::CACHE_SAVE_INTERVAL, function () use ($breadcrumbs) {
            return $this->staticPageRepository->getByBreadcrumbs($breadcrumbs);
        });
    }

    public function save(StaticPage $page): bool
    {
        return $this->staticPageRepository->save($page);
    }

    public function getById(int $id): StaticPage
    {
        $key = StaticPage::CACHE_KEY_BY_ID . $id;

        return Cache::remember($key, StaticPage::CACHE_SAVE_INTERVAL, function () use ($id) {
            return $this->staticPageRepository->getById($id);
        });
    }
}