<?php

namespace App\Models\Posts;

use App\Models\Urls\Url;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

/**
 * Post
 *
 * @mixin Eloquent
 */
class PostCategory extends Model
{
    private const SECTION_TYPE = 2;
    const CACHE_KEY_BY_ID = 'post_category_cache_key_by_id';
    const CACHE_KEY_ALL_WHICH_HAVE_POSTS = 'poast_categories_which_have_childes_cache_key';
    const CACHE_SAVE_INTERVAL = 3600;


    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs', 'content', 'status', 'old_id'];

    public $timestamps;

    public function urls()
    {
        return $this->hasOne(Url::class, 'section_id', 'id')
            ->where('section_type', PostCategory::SECTION_TYPE);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
