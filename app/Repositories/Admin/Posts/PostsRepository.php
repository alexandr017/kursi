<?php

namespace App\Repositories\Admin\Posts;

use DB;
use App\Models\Posts\Post;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;

class PostsRepository
{
    private const SECTION_TYPE = 3;

    public function getAllPostsForShow() : array
    {
        return DB::table('posts')
            ->leftJoin('urls', 'urls.section_id', 'posts.id')
            ->select('posts.id', 'posts.h1', 'posts.status', 'urls.url')
            ->where(['urls.section_type' => PostsRepository::SECTION_TYPE])
            ->whereNull('posts.deleted_at')
            ->get()
            ->toArray();
    }

//    public function find(int $id) : null|object
//    {
//        return PostCategory::find($id);
//    }
//
//    public function createCategory(array $data) : null|object // todo ?
//    {
//        return DB::transaction(function() use($data) {
//
//            $page = new PostCategory($data);
//            $page->save();
//
//            $url = new Url([
//                'url' => $data['url'],
//                'section_id' => $page->id,
//                'section_type' => PostCategoriesRepository::SECTION_TYPE
//            ]);
//            $url->save();
//
//            return $page;
//        });
//
//    }
//
//    public function updateCategory(int $id, array $data) : null|object
//    {
//        return DB::transaction(function() use($id, $data) {
//
//            $page = PostCategory::find($id);
//            $page->update($data);
//
//            $url = Url::where(['section_id' => $id, 'section_type' => PostCategoriesRepository::SECTION_TYPE])->first();
//
//            if ($url != null && $url->url != $data['url']) {
//                $url->url = $data['url'];
//                $url->update();
//            }
//
//            return $page;
//
//        });
//    }
//
//    public function deleteCategory(int $id)
//    {
//        return DB::transaction(function() use($id) {
//
//            $page = PostCategory::find($id);
//            $page->delete();
//
//            $url = Url::where(['section_id' => $id, 'section_type' => PostCategoriesRepository::SECTION_TYPE])->first();
//            $url->delete();
//
//            return $page;
//
//        });
//    }

}
