<?php

namespace App\Repositories\History;

use App\Models\History\History;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class HistoryRepository
{
    public function query(): Builder
    {
        return History::query();
    }

    public function getAll(): Collection
    {
        return $this->query()->get();
    }
}