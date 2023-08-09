<?php

namespace App\Services\Listing\Actions;

use App\Models\Listing\Listing;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Repositories\Tags\TagRepositoryInterface;

class GetListingAction
{
    public function __construct(
        protected ListingRepositoryInterface $listingRepository,
        protected TagRepositoryInterface $tagRepository
    ) {}

    public function run(int $sectionId)
    {
       $listing = $this->listingRepository->getListing($sectionId);

       $listing->parent = $this->getParent($listing);
       $listing->tags = $this->tagRepository->getAll();

       return $listing;
    }

    private function getParent(Listing $listing)
    {
        if (!is_null($listing->parent)) {
            return $this->getParent($listing->parent);
        }

        return $listing;

    }
}