<?php

namespace App\Repositories\Tags;

use App\Models\Tags\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class TagRepository implements TagRepositoryInterface
{
    private function query(): Builder
    {
        return Tag::query();
    }

    public function getAll():Collection
    {
        return $this->query()
            ->get();
    }
}