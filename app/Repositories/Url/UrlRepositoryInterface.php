<?php

namespace App\Repositories\Url;

interface UrlRepositoryInterface
{
    public function getByPath(string $path);
}