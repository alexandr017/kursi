<?php

namespace App\Services\Catalog;

use App\Models\Urls\Url;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Repositories\Url\UrlRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class IndexCatalogChildesAction
{
    public function __construct(
        protected UrlRepositoryInterface $urlRepository,
        protected ListingRepositoryInterface $listingRepository
    )
    {}

    public function run(string $path): Collection
    {
        $url = $this->urlRepository->getByPath($path);

        if ($path === Url::DLYA_DETEJ) {
            $listings = $this->listingRepository->getListingsForChildes($url->section_id);
        } elseif ($path === Url::BESPLATNYE) {
            $listings = $this->listingRepository->getListingsForFreeCourses($url->section_id);
        } else {
            $listings = $this->listingRepository->getChildes($url->section_id);
        }

        return $listings;
    }
}