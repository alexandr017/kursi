<?php

namespace App\Repositories\Question;

use App\Exceptions\SavingErrorException;
use App\Models\Question\Question;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function save(Question $question): bool
    {
        if (!$question->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}