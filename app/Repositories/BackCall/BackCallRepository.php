<?php

namespace App\Repositories\BackCall;

use App\Exceptions\SavingErrorException;
use App\Models\BackCall\BackCall;

class BackCallRepository implements BackCallRepositoryInterface
{
    public function save(BackCall $backCall): bool
    {
        if (!$backCall->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}