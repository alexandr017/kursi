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

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';
    const ROLE_SUPER_ADMIN = 'super_admin';
    const ROLE_CONTENT_MANAGER = 'content_manager';
}
