<?php

namespace App\Models\PostComments;

use App\Models\Posts\Post;
use App\Services\Comments\Dto\CreateCommentDto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\User
 *
 * @property int $id
 * @property int $post_id
 * @property ?int $user_id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property ?int $status
 * @property ?int $parent_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 */

class PostComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    const STATUS_MODERATION = 0;
    const STATUS_ACTIVATED = 1;

    public static function create(CreateCommentDto $dto): static
    {
        $comment = new static();

        $comment->setUserId($dto->userId);
        $comment->setPostId($dto->postId);
        $comment->setName($dto->name);
        $comment->setEmail($dto->email);
        $comment->setContent($dto->content);
        $comment->setParentId($dto->parentId);

        return $comment;
    }

    public function setUserId(?int $userId): void
    {
        $this->user_id = $userId;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function setPostId(int $postId): void
    {
        $this->post_id = $postId;
    }

    public function setParentId(?int $parentId): void
    {
        $this->parent_id = $parentId;
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function childes(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id' )->with('childes');
    }
}
