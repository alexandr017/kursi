<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Post
 *
 * @mixin Eloquent
 */
class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_roles';

    protected $fillable = ['role'];

    public $timestamps = false;
}
