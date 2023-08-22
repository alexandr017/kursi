<?php

namespace App\Models\Pages;

use App\Models\Urls\Url;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

/**
 * Page
 *
 * @mixin Eloquent
 */
class Page extends Model
{
    private const SECTION_TYPE = 1;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs',
        'content', 'status', 'rating_value', 'rating_count', 'old_id'];

    public $timestamps;

    public function urls()
    {
        return $this->hasOne(Url::class, 'section_id','id')
            ->where('section_type', Page::SECTION_TYPE);
    }
}
