<?php

namespace App\Services\Auth\Action;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Auth\Dto\RegisterDto;

class RegisterAction
{
    public function __construct(protected UserRepositoryInterface $userRepository)
    {}

    public function run(RegisterDto $dto)
    {
        $user = User::create($dto);
        $this->userRepository->save($user);

        return $user;
    }
}