<?php

namespace App\Repositories\Listing;

use App\Models\Listing\Listing;
use App\Models\ListingRating\ListingRating;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class ListingCacheRepository implements ListingRepositoryInterface
{
    public function __construct(
        public ListingRepository $listingCacheReadRepository
    )
    {}

    public function getListing(int $id): Listing
    {
        return $this->listingCacheReadRepository->getListing($id);
    }

    public function getById(int $listingId): Listing
    {
        return $this->listingCacheReadRepository->getById($listingId);
    }

    public function saveListingRating(ListingRating $listingRating): bool
    {
        return $this->listingCacheReadRepository->saveListingRating($listingRating);
    }

    public function save(Listing $listing): bool
    {
        return $this->listingCacheReadRepository->save($listing);
    }

    public function getParentsWithChildes(): Collection
    {
        $key = Listing::LISTINGS_PARENT_CHILDES;

        return Cache::remember($key, Listing::CACHE_SAVE_INTERVAL, function () {
            return $this->listingCacheReadRepository->getParentsWithChildes();
        });

    }

    public function getChildes(string $parentId, array $relations = []): Collection
    {
        return $this->listingCacheReadRepository->getChildes($parentId, $relations);
    }

    public function getListingsForChildes(string $parentId): Collection
    {
        $key = Listing::CATALOG_FOR_CHILDES_CACHE_KEY;

        return Cache::remember($key, Listing::CACHE_SAVE_INTERVAL, function () use ($parentId) {
            return $this->listingCacheReadRepository->getListingsForChildes($parentId);
        });
    }

    public function getListingsForFreeCourses(string $parentId): Collection
    {
        $key = Listing::CATALOG_FREE_CACHE_KEY;

        return Cache::remember($key, Listing::CACHE_SAVE_INTERVAL, function () use ($parentId) {
            return $this->listingCacheReadRepository->getListingsForFreeCourses($parentId);
        });

    }

    public function getListingsForAll(): Collection
    {
        $key = Listing::CATALOG_ALL_CACHE_KEY;

        return Cache::remember($key, Listing::CACHE_SAVE_INTERVAL, function () {
            return $this->listingCacheReadRepository->getListingsForAll();
        });
    }
}