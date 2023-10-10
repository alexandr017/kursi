<?php

namespace App\Http\Controllers\Site\V3\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalog\IndexCatalogRequest;
use App\Services\Catalog\IndexCatalogChildesAction;

class CatalogController extends Controller
{
    public function getChildes(
        IndexCatalogRequest $request,
        IndexCatalogChildesAction $action
    ) {
        $path = $request->getPath();
        $listings = $action->run($path);

        return view('site.v3.modules.1-header.header-catalog', compact('listings', 'path'));
    }
}
