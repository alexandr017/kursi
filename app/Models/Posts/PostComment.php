<?php

namespace App\Models\Posts;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class PostComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'post_comments';

    protected $fillable = ['name', 'email', 'pluses', 'minuses', 'email', 'content',
        'status', 'post_id'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function childes(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id' )->with('childes');
    }
}
