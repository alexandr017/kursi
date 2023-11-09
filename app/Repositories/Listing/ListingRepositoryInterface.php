<?php

namespace App\Repositories\Listing;

use App\Models\Listing\Listing;
use App\Models\ListingRating\ListingRating;
use Illuminate\Database\Eloquent\Collection;

interface ListingRepositoryInterface
{
    public function getListing(int $id): Listing;
    public function getById(int $listingId): Listing;
    public function saveListingRating(ListingRating $listingRating): bool;
    public function save(Listing $listing): bool;
    public function getParentsWithChildes(): Collection;
    public function getChildes(string $parentId, array $relations = []): Collection;
    public function getListingsForChildes(string $parentId): Collection;
    public function getListingsForFreeCourses(string $parentId): Collection;
    public function getListingsForAll(): Collection;
}
