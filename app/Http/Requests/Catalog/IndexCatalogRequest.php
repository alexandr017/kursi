<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;

class IndexCatalogRequest extends FormRequest
{
    const PATH = 'path';

    public function getPath(): string
    {
        return $this->route(self::PATH);
    }
}