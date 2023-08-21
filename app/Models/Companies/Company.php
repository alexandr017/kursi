<?php

namespace App\Models\Companies;

use App\Models\Courses\Course;
use App\Models\Urls\Url;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs', 'lead', 'content', 'logo',
        'email', 'hotline', 'link', 'status', 'sort_order', 'rating_value', 'rating_count', 'old_id'];

    public $timestamps;

    const SECTION_TYPE = 5;

    public function reviews(): HasMany
    {
        return $this->hasMany(SchoolReview::class, 'school_id', 'id');
    }
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class, 'company_id', 'id');
    }

    public function url(): HasOne
    {
        return $this->hasOne(Url::class, 'section_id')->where('section_type', self::SECTION_TYPE);
    }
}
