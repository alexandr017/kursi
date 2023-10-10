<?php

namespace App\Http\Controllers\Site\V3\EmployeeRating;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRating\CreateEmployeeRatingRequest;
use App\Services\EmpoyeeRating\Action\CreateEmployeeRatingAction;
use App\Services\EmpoyeeRating\Dto\CreateEmployeeRatingDto;
use App\Services\ListingRating\Dto\CreateListingRatingDto;

class EmployeeRatingController extends Controller
{
    public function rate(
        CreateEmployeeRatingRequest $request,
        CreateEmployeeRatingAction $action
    ) {
        $dto = CreateEmployeeRatingDto::fromRequest($request);
        $listing = $action->run($dto);

        return view('site.v3.templates.listing.rating_stars', compact('listing'));
    }
}