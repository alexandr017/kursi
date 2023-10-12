<?php

namespace App\Http\Controllers\Site\V3\Contacts;

use App\Http\Controllers\Controller;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\Contacts\IndexContactsPageAction;

class ContactsPageController extends Controller
{
    private const SEO_PAGE_ID = 3;

    public function index(IndexContactsPageAction $action)
    {
        $page = $action->run();
        $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);

        return view('site.v3.templates.contacts.index', compact('page', 'breadcrumbs'));
    }
}
