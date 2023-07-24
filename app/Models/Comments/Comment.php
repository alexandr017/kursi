<?php

namespace App\Models\Comments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['comment_type', 'name', 'email', 'pluses', 'minuses', 'email', 'comment',
        'status', 'post_id', 'company_id', 'rating', 'old_id'];

    public $timestamps;
}
