<?php

namespace App\Repositories\Cache;

interface CacheRepositoryInterface
{
    public function save(string $key, $data, int $lifeTime): void;
    public function get(string $key);
    public function remove(string $key): void;
    public function bulkRemove(array $keys): void;
}