<?php

namespace App\Http\Controllers\Site\V3\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\CreateQuestionRequest;
use App\Services\Question\Action\CreateQuestionAction;
use App\Services\Question\Dto\CreateQuestionDto;

class QuestionController extends Controller
{
    public function create(
        CreateQuestionRequest $request,
        CreateQuestionAction $action
    ) {
        $dto = CreateQuestionDto::fromRequest($request);
        $action->run($dto);
        return $this->response();
    }
}