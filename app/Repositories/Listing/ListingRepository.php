<?php

namespace App\Repositories\Listing;

use App\Exceptions\Listing\ListingNotFoundException;
use App\Exceptions\SavingErrorException;
use App\Models\Listing\Listing;
use App\Models\ListingRating\ListingRating;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ListingRepository implements ListingRepositoryInterface
{
    private function query(): Builder
    {
        return Listing::query();
    }

    public function getListing(int $id): Listing
    {
        $query = $this->query()
            ->where('id', $id)
            ->with(['courses' => function ($q) {
                $q->whereNotNull('company_id')
                    ->withAvg('schoolReviews', 'rating')
                    ->withCount('schoolReviews as reviews_count')
                    ->with(['tags', 'school.url'])->orderBy('listing_courses.sort', 'desc')
                    ->limit(5);
                },
                'author',
                'parent.childes.url',
            ]);

        $listing = $query->first();

        if (is_null($listing)) {
            throw new ListingNotFoundException();
        }

        return $listing;
    }

    public function getById(int $listingId): Listing
    {
        $listing = $this->query()
            ->where('id', $listingId)
            ->first();

        if (is_null($listing)) {
            throw new ListingNotFoundException();
        }

        return $listing;
    }

    public function saveListingRating(ListingRating $listingRating): bool
    {
        if (!$listingRating->save()) {
            throw new SavingErrorException();
        }

        return true;
    }

    public function save(Listing $listing): bool
    {
        if (!$listing->save()) {
            throw new SavingErrorException();
        }

        return true;
    }

    public function getParentsWithChildes(): Collection
    {
        return $this->query()
            ->whereNull('parent_id')
            ->with(['childes.url', 'url'])
            ->get();
    }
}