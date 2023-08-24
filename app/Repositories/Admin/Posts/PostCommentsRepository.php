<?php

namespace App\Repositories\Admin\Posts;

use DB;
use App\Models\Posts\PostComment;

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

    public function find(int $id) : null|PostComment
    {
        return PostComment::find($id);
    }

    public function createComment(array $data) : PostComment
    {
        $comment = new PostComment($data);
        $comment->save();

        return $comment;
    }

    public function updateComment(int $id, array $data) : null|PostComment
    {
        $comment = PostComment::find($id);
        $comment->update($data);

        return $comment;
    }

    public function deleteComment(int $id) : null|PostComment
    {
        $comment = PostComment::find($id);
        $comment->delete();

        return $comment;
    }

}
