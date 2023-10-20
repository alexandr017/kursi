<?php

namespace App\Repositories\Question;

use App\Models\Question\Question;

interface QuestionRepositoryInterface
{
    public function save(Question $question): bool;
}