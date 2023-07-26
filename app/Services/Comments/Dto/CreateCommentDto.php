<?php

namespace App\Services\Comments\Dto;

use App\Http\Requests\Comment\CreateCommentRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateCommentDto extends DataTransferObject
{

    public string $name;
    public string $email;
    public int $postId;
    public string $content;
    public ?int $parentId;
    public ?int $userId;

    public static function fromRequest(CreateCommentRequest $request): self
    {
        return new self(
            name: $request->getUserName(),
            email: $request->getUserEmail(),
            postId: $request->getPostId(),
            content: $request->getCommentContent(),
            parentId: $request->getParentId(),
            userId: $request->getUserId()
        );
    }
}