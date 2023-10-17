<?php

namespace App\Repositories\User;

use App\Exceptions\SavingErrorException;
use App\Exceptions\User\UserNotFoundException;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserRepository implements UserRepositoryInterface
{
    private function query(): Builder
    {
        return User::query();
    }

    public function getByEmail(string $email): User
    {
        $user = $this->query()
            ->where('email', $email)
            ->first();

        if (is_null($user)) {
            throw new UserNotFoundException();
        }

        return $user;
    }

    public function save(User $user): bool
    {
        if (!$user->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}