<?php

namespace App\Models\Posts;

use App\Models\PostComments\PostComment;
use App\Models\Posts\PostCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['category_id', 'title', 'meta_description', 'h1', 'breadcrumbs', 'preview',
        'lead', 'content', 'author_id', 'status', 'rating_value', 'rating_count', 'old_id'];

    public $timestamps;

    public function comments(): HasMany
    {
        return $this->hasMany(PostComment::class);
    }

    public function category() : null|object
    {
        return $this->belongsTo(PostCategory::class);
    }
}
