<?php

namespace App\Models\Urls;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

/**
 * Employee
 *
 * @mixin Eloquent
 */
class Url extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['url', 'section_type', 'section_id'];

    public $timestamps = false;

    const DLYA_DETEJ = 'dlya-detej';
    const BESPLATNYE = 'besplatnye';
}
