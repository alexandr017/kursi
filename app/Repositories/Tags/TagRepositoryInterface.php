<?php

namespace App\Repositories\Tags;

use Illuminate\Database\Eloquent\Collection;

interface TagRepositoryInterface
{
    public function getAll():Collection;
}