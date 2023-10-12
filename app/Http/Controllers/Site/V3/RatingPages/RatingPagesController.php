<?php

namespace App\Http\Controllers\Site\V3\RatingPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

class RatingPagesController extends Controller
{
    public function addVote(Request $request)
    {
        $id = (int) clear_data($request['id']);
        $type = clear_data($request['type']);
        $rating = clear_data($request['rating']);

        dd($id, $type, $rating);

        switch ($type) {
            case 'index': return $this->pushVote('\App\Models\StaticPages\StaticPage', 4, $rating);
            case 'mfo': return $this->pushVote('\App\Models\StaticPages\StaticPage', 2, $rating);
            case 'category-listing': return $this->pushVote('\App\Models\Cards\CardsCategories', $id, $rating, 'cards_categories');
            case 'old-listing': return $this->pushVote('\App\Models\Cards\CardsChildrenPages', $id, $rating);
            case 'listing': return $this->pushVote('\App\Models\Cards\Listing', $id, $rating);
            case 'listing-two-level': return $this->pushVote('\App\Models\Cards\CardsChildrenPagesLevel2', $id, $rating);
            case 'translation': return $this->pushVote('\App\Models\Translation\Translation', $id, $rating);

        }
    }

    /**
     * @param string $model
     * @param integer $id
     * @param integer $rating
     * @return string
     */
    private function pushVote($model, $id, $rating, $cache = null)
    {
        $object = $model::find($id);

        if($object == null) {
            return 'Ошибка голосования';
        }

        $current_average_rating = $object->average_rating;
        $current_number_of_votes = $object->number_of_votes;
        //(ср.рейт*кол-во оценок + новая оценка)/(кол-во оценок + 1)
        $new_average_rating = ($current_average_rating * $current_number_of_votes + $rating) / ($current_number_of_votes + 1);
        $object->average_rating = $new_average_rating;
        $object->number_of_votes = $current_number_of_votes + 1;
        $object->save();

        if ($cache != null && Cache::has($cache)) {
            Cache::forget($cache);
        }

        return 'Спасибо, ваш голос учтен!';
    }


}
