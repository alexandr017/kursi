<?php

namespace App\Repositories\Posts;

use Illuminate\Database\Eloquent\Collection;

interface PostRepositoryInterface
{
    public function getPopulars(): Collection;
}