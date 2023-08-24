<?php

namespace App\Repositories\Admin\Pages;

use DB;
use App\Models\Pages\Page;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;
use Throwable;

class PagesRepository
{
    private const SECTION_TYPE = 1;

    public function getAllPagesForShow() : array
    {
        return DB::table('pages')
            ->leftJoin('urls', 'urls.section_id', 'pages.id')
            ->select(['pages.id', 'pages.h1', 'pages.status', 'urls.url'])
            ->where(['urls.section_type' => PagesRepository::SECTION_TYPE])
            ->whereNull('pages.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|Page
    {
        return Page::find($id);
    }

    /**
     * @throws Throwable
     */
    public function createPage(array $data) : Page
    {
        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($data) : Page
        {

            $page = new Page($data);
            $page->save();

            $url = new Url([
                'url' => $data['url'],
                'section_id' => $page->id,
                'section_type' => PagesRepository::SECTION_TYPE
            ]);
            $url->save();

            return $page;
        });
    }

    /**
     * @throws Throwable
     */
    public function updatePage(int $id, array $data) : null|Page
    {
        if (!isset($data['average_rating']) && !isset($data['number_of_votes'])) {
            [$data['average_rating'], $data['number_of_votes']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($id, $data) : null|Page
        {

            $page = Page::find($id);
            $page->update($data);

            $url = Url::where(['section_id' => $id, 'section_type' => PagesRepository::SECTION_TYPE])->first();

            if ($url != null && $url->url != $data['url']) {
                $url->url = $data['url'];
                $url->update();
            }

            return $page;

        });
    }

    /**
     * @throws Throwable
     */
    public function deletePage(int $id) : null|Page
    {
        return DB::transaction(function() use($id) : null|Page
        {
            $page = Page::find($id);
            $page->delete();

            $url = Url::where(['section_id' => $id, 'section_type' => PagesRepository::SECTION_TYPE])->first();
            $url->delete();

            return $page;
        });
    }

}
