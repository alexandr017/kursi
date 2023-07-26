<?php

namespace App\Services\Comments\Actions;

use App\Http\Resources\Comments\PostCommentResource;
use App\Models\PostComments\PostComment;
use App\Repositories\Write\Comment\CommentWriteRepositoryInterface;
use App\Services\Comments\Dto\CreateCommentDto;

class CreateCommentAction
{
    public function __construct(protected CommentWriteRepositoryInterface $commentWriteRepository)
    {}

    public function run(CreateCommentDto $dto): PostCommentResource
    {
        $comment = PostComment::create($dto);
        $this->commentWriteRepository->save($comment);

        return new PostCommentResource($comment);
    }
}