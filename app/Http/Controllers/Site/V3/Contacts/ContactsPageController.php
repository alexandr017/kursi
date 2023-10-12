<?php

namespace App\Http\Controllers\Site\V3\Contacts;

use App\Http\Controllers\Controller;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use Illuminate\Http\Request;

class ContactsPageController extends Controller
{
    private const SEO_PAGE_ID = 3;

    public function index()
    {
        // todo: можно написать более красиво через репозиторий
        $page = \DB::table('seo_for_pages')->where(['id' => self::SEO_PAGE_ID])->first();
        dd($page);

        return view('site.v3.templates.contacts.index', compact('page'));
    }
}
