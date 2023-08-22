<?php

namespace App\Models\Companies;

use App\Services\CompanyReview\Dto\CreateCompanyReviewDto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Eloquent;

/**
 * App\Models\ListingRating\ListingRating
 *
 * @property int $id
 * @property int $school_id
 * @property float $rating
 * @property ?int $user_id
 * @property int $status
 * @property string $title
 * @property string $character_code
 * @property int $sort
 * @property ?string $pluses
 * @property ?string $minuses
 * @property ?string content
 * @property string $author_name
 * @property ?int $code
 * @property ?int $old_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */

/**
 * Company
 *
 * @mixin Eloquent
 */
class SchoolReview extends Model
{
    use HasFactory;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'school_id', 'id');
    }

    public static function create(CreateCompanyReviewDto $dto): self
    {
        $new = new static();

        $new->setUserId($dto->userId);
        $new->setSchoolId($dto->companyId);
        $new->setTitle($dto->name);
        $new->setStatus(1); //ToDo: refactor
        $new->setSort(500); //ToDo: refactor
        $new->setPluses($dto->pluses);
        $new->setMinuses($dto->minuses);
        $new->setContent($dto->content);
        $new->setRating($dto->rate);
        $new->setAuthorName($dto->name);

        return $new;
    }

    public function setUserId(?int $userId): void
    {
        $this->user_id = $userId;
    }

    public function setSchoolId(int $schoolId): void
    {
        $this->school_id = $schoolId;
    }

    public function setTitle(string $name): void
    {
        $this->title = 'Отзыв от ' . $name;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function setPluses(?string $pluses): void
    {
        $this->pluses = $pluses;
    }

    public function setMinuses(?string $minuses): void
    {
        $this->minuses = $minuses;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    public function setAuthorName(string $authorName): void
    {
        $this->author_name = $authorName;
    }
}
