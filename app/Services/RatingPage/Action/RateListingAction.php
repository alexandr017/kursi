<?php

namespace App\Services\RatingPage\Action;

use App\Models\Listing\Listing;
use App\Models\ListingRating\ListingRating;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Services\ListingRating\Dto\CreateListingRatingDto;
use App\Services\RatingPage\Dto\PageRatingDto;
use App\Services\RatingPage\RatingPageAbstractClass;

class RateListingAction extends RatingPageAbstractClass
{
    public function __construct(protected ListingRepositoryInterface $listingRepository)
    {}

    public function rate(PageRatingDto $dto): Listing
    {
        $listing = $this->listingRepository->getById($dto->entityId);
        $rateAvg = $this->getRatingValue($listing->getRatingsValue(), $listing->getRatingsCount(), $dto->rate);

        $listing->incrementRatingCount();
        $listing->addRatingsSum($dto->rate);
        $listing->setRatingsValue($rateAvg);

        $this->listingRepository->save($listing);

        return $listing;
    }
}