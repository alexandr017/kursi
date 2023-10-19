<?php

namespace App\Models\Listing;

use App\Models\Courses\Course;
use App\Models\Team\Employee;
use App\Models\Urls\Url;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Eloquent;


/**
 * App\Models\ListingRating\ListingRating
 *
 * @property int $id
 * @property int $rating_count
 * @property float $rating_sum
 * @property float $rating_value
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */
/**
 * Page
 *
 * @mixin Eloquent
 */
class Listing extends Model
{
    use HasFactory;

    protected $table = 'listings';

    protected $fillable = [
        'parent_id', 'name', 'title', 'description', 'slug', 'meta_description', 'meta_title', 'h1',
        'breadcrumbs', 'lead', 'content', 'author_id', 'rating_value', 'rating_count', 'rating_sum', 'status'];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const SECTION_TYPE = 6;

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(
            Course::class,
            'listing_courses',
            'listing_id',
            'course_id'
        )->withPivot(['sort']);
    }

    public function coursesStructuredData(): BelongsToMany
    {
        return $this->belongsToMany(
            Course::class,
            'listing_courses',
            'listing_id',
            'course_id'
        )->withPivot(['sort']);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'author_id');
    }

    public function childes(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id' );
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id', 'id')->with('parent');
    }

    public function url(): HasOne
    {
        return $this->hasOne(Url::class, 'section_id', 'id')->where('section_type', self::SECTION_TYPE);
    }

    // этот метод для админки юзается
    public function urls()
    {
        return $this->hasOne(Url::class, 'section_id','id')
            ->where('section_type', self::SECTION_TYPE);
    }

    public function getRatingsCount(): int
    {
        return $this->rating_count;
    }

    public function getRatingsSum(): int
    {
        return $this->rating_sum;
    }

    public function getRatingsValue(): float
    {
        return $this->rating_value;
    }

    public function incrementRatingCount(): void
    {
        $this->rating_count ++;
    }

    public function addRatingsSum(float $ratingsSum): void
    {
        $this->rating_sum += $ratingsSum;
    }

    public function setRatingsValue(float $ratingValue): void
    {
        $this->rating_value = $ratingValue;
    }
}
