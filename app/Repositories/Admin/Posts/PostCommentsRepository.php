<?php

namespace App\Repositories\Admin\Posts;

use DB;
use App\Models\Posts\PostComment;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;

class PostCommentsRepository
{
    public function getAllCommentsForShow() : array
    {
        return DB::table('post_comments')
            ->leftJoin('posts', 'posts.id', 'post_comments.post_id')
            ->select(['post_comments.id',  'post_comments.status', 'post_comments.name', 'posts.h1 as postH1'])
            ->whereNull('post_comments.deleted_at')
            ->whereNull('posts.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return PostComment::find($id);
    }

    public function createComment(array $data) : null|object // todo ?
    {
        $comment = new PostComment($data);
        $comment->save();

        return $comment;
    }

    public function updateComment(int $id, array $data) : null|object
    {
        $comment = PostComment::find($id);
        $comment->update($data);

        return $comment;
    }

    public function deleteComment(int $id) : null|object
    {
        $comment = PostComment::find($id);
        $comment->delete();

        return $comment;
    }

}
