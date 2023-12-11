<?php

namespace App\Repositories\History;

use Illuminate\Database\Eloquent\Collection;

interface HistoryRepositoryInterface
{
    public function getAll(): Collection;
}