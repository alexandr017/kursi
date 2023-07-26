<?php

namespace App\Repositories\Write\Comment;

use App\Models\PostComments\PostComment;

interface CommentWriteRepositoryInterface
{
    public function save(PostComment $comment): bool;
}