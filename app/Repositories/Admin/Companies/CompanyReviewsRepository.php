<?php

namespace App\Repositories\Admin\Companies;

use DB;
use App\Models\Companies\SchoolReview;

class CompanyReviewsRepository
{
    public function getAllReviewsForShow() : array
    {
        return DB::table('school_reviews')
            ->leftJoin('companies', 'companies.id', 'school_reviews.school_id')
            ->select(['companies.name', 'school_reviews.id', 'school_reviews.title', 'school_reviews.status'])
            //->whereNull('school_reviews.deleted_at') // todo ?
            ->whereNull('companies.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return SchoolReview::find($id);
    }

    public function createReview(array $data) : null|object // todo ?
    {
        $review = new SchoolReview($data);
        $review->save();

        return $review;
    }

    public function updateReview(int $id, array $data) : null|object
    {
        $review = SchoolReview::find($id);
        $review->update($data);

        return $review;
    }

    public function deleteReview(int $id) : null|object
    {
        $review = SchoolReview::find($id);
        $review->delete();

        return $review;
    }
}
