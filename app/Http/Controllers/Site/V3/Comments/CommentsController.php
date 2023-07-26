<?php

namespace App\Http\Controllers\Site\V3\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CreateCommentRequest;
use App\Services\Comments\Actions\CreateCommentAction;
use App\Services\Comments\Dto\CreateCommentDto;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentsController extends Controller
{
    public function create(
        CreateCommentRequest $request,
        CreateCommentAction $createCommentAction
    ): JsonResource {
        $dto = CreateCommentDto::fromRequest($request);

        return $createCommentAction->run($dto);
    }
}