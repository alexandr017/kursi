<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Services\NotFound\Action\GetPageNotFoundDataAction;

class PageNotFoundController extends Controller implements DynamicPagesInterface
{
    const SEO_PAGE_ID = 7;

    public function render($sectionID = null, $isAmp = false, $paginatePage = 1)
    {
        $action = resolve(GetPageNotFoundDataAction::class);
        $listings = $action->run();
        $page = \DB::table('seo_for_pages')->where(['id' => self::SEO_PAGE_ID])->first();

        return response()->view('site.v3.templates.not-found.not-found', compact('listings', 'page'), 404);
    }
}