<?php

namespace App\Repositories\Admin\Posts;

use DB;
use App\Models\Posts\PostCategory;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;

class PostCategoriesRepository
{
    private const SECTION_TYPE = 2;

    public function getAllCategoriesForShow() : array
    {
        return DB::table('post_categories')
            ->leftJoin('urls', 'urls.section_id', 'post_categories.id')
            ->select('post_categories.id', 'post_categories.h1', 'post_categories.status', 'urls.url')
            ->where(['urls.section_type' => PostCategoriesRepository::SECTION_TYPE])
            ->whereNull('post_categories.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return PostCategory::find($id);
    }

    public function createCategory(array $data) : null|object // todo ?
    {
        return DB::transaction(function() use($data) {

            $page = new PostCategory($data);
            $page->save();

            $url = new Url([
                'url' => $data['url'],
                'section_id' => $page->id,
                'section_type' => PostCategoriesRepository::SECTION_TYPE
            ]);
            $url->save();

            return $page;
        });

    }

    public function updateCategory(int $id, array $data) : null|object
    {
        return DB::transaction(function() use($id, $data) {

            $page = PostCategory::find($id);
            $page->update($data);

            $url = Url::where(['section_id' => $id, 'section_type' => PostCategoriesRepository::SECTION_TYPE])->first();

            if ($url != null && $url->url != $data['url']) {
                $url->url = $data['url'];
                $url->update();
            }

            return $page;
        });
    }

    public function deleteCategory(int $id)
    {
        return DB::transaction(function() use($id) {

            $page = PostCategory::find($id);
            $page->delete();

            $url = Url::where(['section_id' => $id, 'section_type' => PostCategoriesRepository::SECTION_TYPE])->first();
            $url->delete();

            return $page;
        });
    }

    public function getCategoriesForSelect() : array
    {
        return PostCategory::select('id', 'h1')->whereNull('deleted_at')->pluck('h1', 'id')->toArray();
    }

}
