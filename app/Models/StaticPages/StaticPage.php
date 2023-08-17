<?php

namespace App\Models\StaticPages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

/**
 * StaticPage
 *
 * @mixin Eloquent
 */
class StaticPage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'seo_for_pages';

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs', 'lead', 'content', 'rating_value', 'rating_count'];
}
