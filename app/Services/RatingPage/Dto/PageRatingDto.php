<?php

namespace App\Services\RatingPage\Dto;

use App\Http\Requests\RatingPage\RatingPageRequest;
use Spatie\DataTransferObject\DataTransferObject;

class PageRatingDto extends DataTransferObject
{
    public int $entityId;
    public string $entityType;
    public float $rate;

    public static function fromRequest(RatingPageRequest $request): self
    {
        return new self(
            entityId: $request->getEntityId(),
            entityType: $request->getEntityType(),
            rate: $request->getRate()
        );
    }
}