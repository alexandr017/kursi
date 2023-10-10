<?php

namespace App\Repositories\Url;

use App\Models\Urls\Url;
use Illuminate\Database\Eloquent\Builder;

use function Amp\Promise\first;

class UrlRepository implements UrlRepositoryInterface
{
    private function urlQuery(): Builder
    {
        return Url::query();
    }

    public function getByPath(string $path)
    {
        $url = $this->urlQuery()
            ->where('url', $path)
            ->first();

        return $url;
    }
}