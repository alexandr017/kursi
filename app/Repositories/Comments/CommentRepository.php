<?php

namespace App\Repositories\Comments;

use App\Exceptions\SavingErrorException;
use App\Models\PostComments\PostComment;

class CommentRepository implements CommentRepositoryInterface
{
    public function save(PostComment $comment): bool
    {
        if (!$comment->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}