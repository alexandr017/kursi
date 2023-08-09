<?php

namespace App\Models\Courses;

use App\Models\Companies\Company;
use App\Models\Companies\SchoolReview;
use App\Models\Listing\Listing;
use App\Models\Tags\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Course extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(
            Tag::class,
            'course_tags',
            'course_id',
            'tag_id'
        );
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function listings(): BelongsToMany
    {
        return $this->belongsToMany(
            Listing::class,
            'listing_courses',
            'course_id',
            'listing_id'
        )->withPivot(['sort']);
    }

    public function schoolReviews(): HasManyThrough
    {
        return $this->hasManyThrough(
            SchoolReview::class,
            Company::class,
            'id',
            'school_id',
            'company_id',
            'id'
        );
    }

}