<?php

namespace App\Services\FakeRating;

class FakeRating
{
    private const MIN_AVERAGE_RATING = 4.0;
    private const MAX_AVERAGE_RATING = 5.0;

    private const MIN_NUMBER_OF_VOTES = 15;
    private const MAX_NUMBER_OF_VOTES = 25;

    public static function makeRating() : array
    {
        $averageRating = (self::MIN_AVERAGE_RATING + (self::MAX_AVERAGE_RATING - self::MIN_AVERAGE_RATING) * (mt_rand() / mt_getrandmax()));
        $numberOfVotes = rand(self::MIN_NUMBER_OF_VOTES, self::MAX_NUMBER_OF_VOTES);

        return [$averageRating, $numberOfVotes];
    }

}
