<?php

namespace App\Services\Comments\Actions;

use App\Http\Resources\Comments\PostCommentResource;
use App\Models\PostComments\PostComment;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Services\Comments\Dto\CreateCommentDto;

class CreateCommentAction
{
    public function __construct(protected CommentRepositoryInterface $commentRepository)
    {}

    public function run(CreateCommentDto $dto): PostCommentResource
    {
        $comment = PostComment::create($dto);
        $this->commentRepository->save($comment);

        return new PostCommentResource($comment);
    }
}