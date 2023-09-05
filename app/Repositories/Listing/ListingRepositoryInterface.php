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
}