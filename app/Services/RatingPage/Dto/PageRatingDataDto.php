<?php

namespace App\Services\RatingPage\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class PageRatingDataDto extends DataTransferObject
{
    public int $entityId;
    public string $entityType;
    public float $ratingValue;
    public int $ratingCount;
}