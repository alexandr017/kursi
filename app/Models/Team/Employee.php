<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Urls\Url;
use Eloquent;

/**
 * Employee
 *
 * @mixin Eloquent
 */
class Employee extends Model
{
    private const SECTION_TYPE = 4;

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'photo', 'title', 'meta_description', 'h1', 'breadcrumbs', 'lead',  'content', 'status',
        'old_id', 'rating_value', 'rating_count', 'job', 'email', 'vk_link', 'telegram_link', 'education', 'sort_order'];


    public function urls()
    {
        return $this->hasOne(Url::class, 'section_id','id')
            ->where('section_type', Employee::SECTION_TYPE);
    }
}
