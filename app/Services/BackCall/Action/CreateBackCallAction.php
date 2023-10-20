<?php

namespace App\Services\BackCall\Action;

use App\Models\BackCall\BackCall;
use App\Repositories\BackCall\BackCallRepositoryInterface;
use App\Services\BackCall\Dto\CreateBackCallDto;

class CreateBackCallAction
{
    public function __construct(protected BackCallRepositoryInterface $backCallRepository)
    {}

    public function run(CreateBackCallDto $dto): void
    {
        $backCall = BackCall::create($dto);
        $this->backCallRepository->save($backCall);
    }
}