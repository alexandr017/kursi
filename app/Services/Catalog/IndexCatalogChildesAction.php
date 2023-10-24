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

    public function run(string $path)
    {
        $url = $this->urlRepository->getByPath($path);

        if ($path === Url::DLYA_DETEJ) {
            $listings = collect();
            $items = $this->listingRepository->getListingsForChildes($url->section_id);

            foreach ($items as $item) {
                if ($item->name == 'Школа') {
                    $lastKey = 0;

                    foreach ($item->childes as $key => $child) {
                        if ($child->childes->isNotEmpty()) {
                            $item->childes[$lastKey] = $child;
                            if ($key != $lastKey) {
                                unset($item->childes[$key]);
                            }
                            $lastKey ++;
                        }
                    }
                }

                $listings->push($item);
            }
        } elseif ($path === Url::BESPLATNYE) {
            $listings = $this->listingRepository->getListingsForFreeCourses($url->section_id);
        } else {
            $listings = $this->listingRepository->getChildes($url->section_id);
        }

        return $listings;
    }
}