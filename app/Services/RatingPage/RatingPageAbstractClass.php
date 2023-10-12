<?php

namespace App\Services\RatingPage;

use App\Services\RatingPage\Dto\PageRatingDto;

abstract class RatingPageAbstractClass
{
    abstract public function rate(PageRatingDto $dto);

    public function getRatingValue(float $avgRating, int $ratingCount, float $rate): float
    {
        return round(($avgRating * $ratingCount + $rate) / ($ratingCount + 1), 2);
    }
}