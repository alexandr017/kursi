<?php

namespace App\Models\Comments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// todo паходу именно эта модель не узается
class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'name', 'email', 'user_id', 'content', 'status', 'post_id', 'company_id', 'old_id'];

    public $timestamps;
}
