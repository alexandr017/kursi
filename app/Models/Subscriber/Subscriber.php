<?php

namespace App\Models\Subscriber;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Models\Subscriber\Subscriber
 *
 * @property int $id
 * @property string $email
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 */
class Subscriber extends Model
{
    use HasFactory;

    public static function create(string $email): self
    {
        $new = new self();
        $new->setEmail($email);

        return $new;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
