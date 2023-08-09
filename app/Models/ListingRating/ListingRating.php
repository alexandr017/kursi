<?php

namespace App\Models\ListingRating;

use App\Services\ListingRating\Dto\CreateListingRatingDto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ListingRating\ListingRating
 *
 * @property int $id
 * @property int $listing_id
 * @property float $rate
 * @property ?int $user_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */
class ListingRating extends Model
{
    use HasFactory;

    public static function create(CreateListingRatingDto $dto): self
    {
        $rating = new self();

        $rating->setUserId($dto->userId);
        $rating->setListingId($dto->listingId);
        $rating->setRate($dto->rate);

        return $rating;
    }

    public function setUserId(?int $userId): void
    {
        $this->user_id = $userId;
    }

    public function setListingId(int $listingId): void
    {
        $this->listing_id = $listingId;
    }

    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }
}
