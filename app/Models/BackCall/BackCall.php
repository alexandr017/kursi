<?php

namespace App\Models\BackCall;

use App\Services\BackCall\Dto\CreateBackCallDto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Question\Question
 *
 * @property int $id
 * @property string $name
 * @property string $phone_number
 * @property bool $rules_accepted
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */


class BackCall extends Model
{
    use HasFactory;

    public static function create(CreateBackCallDto $dto): self
    {
        $new = new self();

        $new->setName($dto->name);
        $new->setPhoneNumber($dto->phoneNumber);
        $new->setRulesAccepted($dto->rulesAccepted);

        return $new;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phone_number = $phoneNumber;
    }

    public function setRulesAccepted(string $rulesAccepted): void
    {
        $this->rules_accepted = $rulesAccepted;
    }
}
