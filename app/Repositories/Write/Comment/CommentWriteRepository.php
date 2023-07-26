<?php

namespace App\Repositories\Write\Comment;

use App\Exceptions\SavingErrorException;
use App\Models\PostComments\PostComment;

class CommentWriteRepository implements CommentWriteRepositoryInterface
{
    public function save(PostComment $comment): bool
    {
        if (!$comment->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}