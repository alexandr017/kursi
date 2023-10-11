<?php

namespace App\Models\Team;

use App\Services\EmpoyeeRating\Dto\CreateEmployeeRatingDto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\EmployeeRating
 *
 * @property int $id
 * @property int $employee_id
 * @property float $rate
 * @property ?int $user_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */
class EmployeeRating extends Model
{
    use HasFactory;

    public static function create(CreateEmployeeRatingDto $dto): self
    {
        $rating = new self();

        $rating->setUserId($dto->userId);
        $rating->setEmployeeId($dto->employeeId);
        $rating->setRate($dto->rate);

        return $rating;
    }

    public function setUserId(?int $userId): void
    {
        $this->user_id = $userId;
    }

    public function setEmployeeId(int $employeeId): void
    {
        $this->employee_id = $employeeId;
    }

    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }
}
