<?php

namespace App\Services\Auth\Action;

use App\Models\User;

class LogoutAction
{
    public function run(User $user): void
    {
        $user->token()->revoke();
    }
}