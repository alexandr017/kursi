<?php

namespace App\Services\ListingRating\Dto;

use App\Http\Requests\ListingRating\CreateListingRatingRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateListingRatingDto extends DataTransferObject
{
    public int $listingId;
    public float $rate;
    public ?int $userId;

    public static function fromRequest(CreateListingRatingRequest $request): self
    {
        return new self(
            listingId: $request->getListingId(),
            rate: $request->getRate(),
            userId: $request->getUserId()
        );
    }
}