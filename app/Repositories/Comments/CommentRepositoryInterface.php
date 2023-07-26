<?php

namespace App\Repositories\Comments;

use App\Models\PostComments\PostComment;

interface CommentRepositoryInterface
{
    public function save(PostComment $comment): bool;
}