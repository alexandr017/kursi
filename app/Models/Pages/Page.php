<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs',
        'content', 'status', 'rating_value', 'rating_count', 'old_id'];

    public $timestamps;
}
