<?php

namespace App\Repositories\Cache;

use Illuminate\Support\Facades\Cache;

class CacheRepository implements CacheRepositoryInterface
{
    public function save(string $key, $data, int $lifeTime = 21600): void
    {
        $cache = Cache::get($key);

        if ($cache) {
            Cache::forget($key);
        }

        Cache::add($key, $data, $lifeTime);
    }

    public function get(string $key)
    {
        return Cache::get($key);
    }

    public function remove(string $key): void
    {
        Cache::forget($key);
    }

    public function bulkRemove(array $keys): void
    {
        foreach ($keys as $key) {
            $this->remove($key);
        }
    }
}