<?php

namespace App\Repositories\Admin\Posts;

use DB;
use App\Models\Posts\Post;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;
use Throwable;

class PostsRepository
{
    private const SECTION_TYPE = 3;

    public function getAllPostsForShow() : array
    {
        return DB::table('posts')
            ->leftJoin('urls', 'urls.section_id', 'posts.id')
            ->leftJoin('post_categories', 'post_categories.id', 'posts.category_id')
            ->select(['posts.id', 'posts.h1', 'posts.status', 'urls.url', 'post_categories.h1 as categoryH1'])
            ->where(['urls.section_type' => PostsRepository::SECTION_TYPE])
            ->whereNull('posts.deleted_at')
            ->get()
            ->toArray();


    }

    public function find(int $id) : null|Post
    {
        return Post::find($id);
    }

    /**
     * @throws Throwable
     */
    public function createPost(array $data) : Post
    {
        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($data) : Post
        {
            $post = new Post($data);
            $post->save();

            $url = new Url([
                'url' => $data['url'],
                'section_id' => $post->id,
                'section_type' => PostsRepository::SECTION_TYPE
            ]);
            $url->save();

            return $post;
        });

    }

    /**
     * @throws Throwable
     */
    public function updatePost(int $id, array $data) : null|Post
    {
        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($id, $data) : null|Post
        {

            $post = Post::find($id);
            $post->update($data);

            $url = Url::where(['section_id' => $id, 'section_type' => PostsRepository::SECTION_TYPE])->first();

            if ($url != null && $url->url != $data['url']) {
                $url->url = $data['url'];
                $url->update();
            }

            return $post;
        });
    }

    /**
     * @throws Throwable
     */
    public function deletePost(int $id) : null|Post
    {
        return DB::transaction(function() use($id) : null|Post
        {
            $post = Post::find($id);
            $post->delete();

            $url = Url::where(['section_id' => $id, 'section_type' => PostsRepository::SECTION_TYPE])->first();
            $url->delete();

            return $post;
        });
    }

    public function getPostsForSelect() : array
    {
        return Post::select('id', 'h1')->whereNull('deleted_at')->pluck('h1', 'id')->toArray();
    }

}
