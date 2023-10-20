<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getByEmail(string $email): User;
    public function save(User $user): bool;
}