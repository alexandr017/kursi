<?php

namespace App\Services\Question\Action;

use App\Models\Question\Question;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Services\Question\Dto\CreateQuestionDto;

class CreateQuestionAction
{
    public function __construct(protected QuestionRepositoryInterface $questionRepository)
    {}

    public function run(CreateQuestionDto $dto)
    {
        $question = Question::create($dto);

        $this->questionRepository->save($question);
    }
}