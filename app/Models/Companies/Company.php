<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs', 'lead', 'content', 'logo',
        'email', 'hotline', 'link', 'status', 'sort_order', 'rating_value', 'rating_count', 'old_id'];

    public $timestamps;

    public function reviews(): HasMany
    {
        return $this->hasMany(SchoolReview::class, 'school_id', 'id');
    }
}
