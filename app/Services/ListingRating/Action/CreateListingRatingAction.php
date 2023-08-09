<?php

namespace App\Services\ListingRating\Action;

use App\Models\Listing\Listing;
use App\Models\ListingRating\ListingRating;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Services\ListingRating\Dto\CreateListingRatingDto;

class CreateListingRatingAction
{
    public function __construct(protected ListingRepositoryInterface $listingRepository)
    {}

    public function run(CreateListingRatingDto $dto): Listing
    {
        $listingRating = ListingRating::create($dto);
        $this->listingRepository->saveListingRating($listingRating);

        $listing = $this->listingRepository->getById($dto->listingId);
        $listing->incrementRatingCount();
        $listing->addRatingsSum($dto->rate);
        $listing->setRatingsValue(round($listing->getRatingsSum() / $listing->getRatingsCount(), 2));

        $this->listingRepository->save($listing);

        return $listing;
    }
}