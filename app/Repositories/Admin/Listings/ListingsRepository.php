<?php

namespace App\Repositories\Admin\Listings;

use DB;
use App\Models\Listing\Listing;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;
use Throwable;

class ListingsRepository
{
    private const SECTION_TYPE = 6;

    public function getAllListingsForShow() : array
    {
        return DB::table('listings')
            ->leftJoin('urls', 'urls.section_id', 'listings.id')
            ->select(['listings.id', 'listings.name', 'listings.status', 'urls.url'])
            ->where(['urls.section_type' => ListingsRepository::SECTION_TYPE])
            ->whereNull('listings.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|Listing
    {
        return Listing::find($id);
    }

    /**
     * @throws Throwable
     */
    public function createListing(array $data) : Listing
    {
        $data['description'] = 'test'; // todo мне кажется это поле не надо
        $data['slug'] = 'test'; // todo мне кажется это поле не надо
        $data['meta_title'] = 'test'; // todo мне кажется это поле не надо
        $data['rating_sum'] = 0; // todo мне кажется это поле не надо

        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($data) : Listing
        {

            $listing = new Listing($data);
            $listing->save();

            $url = new Url([
                'url' => $data['url'],
                'section_id' => $listing->id,
                'section_type' => ListingsRepository::SECTION_TYPE
            ]);
            $url->save();

            return $listing;
        });
    }

    /**
     * @throws Throwable
     */
    public function updateListing(int $id, array $data) : null|Listing
    {
        if (!isset($data['average_rating']) && !isset($data['number_of_votes'])) {
            [$data['average_rating'], $data['number_of_votes']] = FakeRating::makeRating();
        }

//        $data['description'] = 'test'; // todo мне кажется это поле не надо
//        $data['slug'] = 'test'; // todo мне кажется это поле не надо
//        $data['meta_title'] = 'test'; // todo мне кажется это поле не надо
//        $data['rating_sum'] = 0; // todo мне кажется это поле не надо

        return DB::transaction(function() use($id, $data) : null|Listing
        {

            $listing = Listing::find($id);
            $listing->update($data);

            $url = Url::where(['section_id' => $id, 'section_type' => ListingsRepository::SECTION_TYPE])->first();

            if ($url != null && $url->url != $data['url']) {
                $url->url = $data['url'];
                $url->update();
            }

            return $listing;

        });
    }

    /**
     * @throws Throwable
     */
    public function deleteListing(int $id) : null|Listing
    {
        return DB::transaction(function() use($id) : null|Listing
        {

            $listing = Listing::find($id);
            $listing->delete();

            $url = Url::where(['section_id' => $id, 'section_type' => ListingsRepository::SECTION_TYPE])->first();
            $url->delete();

            return $listing;
        });
    }

}
