<?php

namespace App\Http\Controllers\Site\V3\ListingRating;

use App\Http\Controllers\Controller;
use App\Http\Requests\ListingRating\CreateListingRatingRequest;
use App\Services\ListingRating\Action\CreateListingRatingAction;
use App\Services\ListingRating\Dto\CreateListingRatingDto;

class ListingRatingController extends Controller
{
    public function create(
        CreateListingRatingRequest $request,
        CreateListingRatingAction $action
    ) {
        $dto = CreateListingRatingDto::fromRequest($request);
        $listing = $action->run($dto);

        return view('site.v3.templates.listing.rating_stars', compact('listing'));
    }
}