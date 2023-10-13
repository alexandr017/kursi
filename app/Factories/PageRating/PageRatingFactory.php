<?php

namespace App\Factories\PageRating;

use App\Services\RatingPage\Action\EmployeeRatingAction;
use App\Services\RatingPage\Action\PostRatingAction;
use App\Services\RatingPage\Action\RateListingAction;
use App\Services\RatingPage\Action\SeoPageRatingAction;
use App\Services\RatingPage\RatingPageAbstractClass;
use InvalidArgumentException;

class PageRatingFactory
{
    const MAIN_PAGE = 'main_page';
    const CONTACTS = 'contacts';
    const EMPLOYEE = 'employee';
    const LISTING = 'listing';
    const POST = 'post';

    public function run(string $entityType): RatingPageAbstractClass
    {
        return match ($entityType) {
            self::MAIN_PAGE, self::CONTACTS => resolve(SeoPageRatingAction::class),
            self::EMPLOYEE => resolve(EmployeeRatingAction::class),
            self::LISTING => resolve(RateListingAction::class),
            self::POST => resolve(PostRatingAction::class),
            default => throw new InvalidArgumentException(),
        };
    }
}