<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'photo', 'title', 'meta_description', 'h1', 'breadcrumbs', 'lead',  'content', 'status',
        'old_id', 'rating_value', 'rating_count', 'job', 'email', 'vk_link', 'telegram_link', 'education', 'sort_order'];

}
