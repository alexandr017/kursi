<?php

namespace App\Services\NotFound\Action;

use App\Repositories\Listing\ListingRepositoryInterface;

class GetPageNotFoundDataAction
{
    public function __construct(public ListingRepositoryInterface $listingRepository)
    {}

    public function run()
    {
        return $this->listingRepository->getParentsWithChildes();

    }
}