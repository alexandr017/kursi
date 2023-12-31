<?php

namespace App\Repositories\Admin\StaticPages;

use DB;
use App\Models\StaticPages\StaticPage;
use App\Services\FakeRating\FakeRating;

class StaticPagesRepository
{
    public function getAllPagesForShow() : array
    {
        return DB::table('seo_for_pages')
            ->select(['id', 'h1'])
            ->whereNull('deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return StaticPage::find($id);
    }

    public function createPage(array $data) : StaticPage
    {
        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        $page = new StaticPage($data);
        $page->save();
        return $page;
    }

    public function updatePage(int $id, array $data) : null|StaticPage
    {
        $page = StaticPage::find($id);

        if ($page != null) {
            $page->update($data);
            return $page;
        }

        return  null;
    }

}
