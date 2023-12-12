<?php

namespace App\Repositories\History;

use App\Models\History\History;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class HistoryCacheRepository implements HistoryRepositoryInterface
{
    public function __construct(
        public HistoryRepository $historyRepository
    ){}

    public function getAll(): Collection
    {
        $key = History::CACHE_KEY_ALL;

        return Cache::remember($key, History::CACHE_SAVE_INTERVAL, function () {
            return $this->historyRepository->getAll();
        });
    }
}