<?php

namespace App\Models\Question;

use App\Services\Question\Dto\CreateQuestionDto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Question\Question
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $question
 * @property bool $rules_accepted
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */

class Question extends Model
{
    use HasFactory;

    public static function create(CreateQuestionDto $dto): self
    {
        $new = new self();

        $new->setName($dto->name);
        $new->setEmail($dto->emil);
        $new->setQuestion($dto->question);
        $new->setRulesAccepted($dto->rulesAccepted);

        return $new;

    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    public function setRulesAccepted(string $rulesAccepted): void
    {
        $this->rules_accepted = $rulesAccepted;
    }
}
