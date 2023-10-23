<?php

namespace App\Repositories\BackCall;

use App\Models\BackCall\BackCall;

interface BackCallRepositoryInterface
{
    public function save(BackCall $backCall): bool;
}