<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Users\UserRole;
use Illuminate\Http\Request;
use App\Services\Breadcrumbs\BreadcrumbsRender;

// Dynamic type 1
class PagesController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $page = \App\Models\Pages\Page::find($sectionID);

        if ($page == null) {
            abort(404);
        }

        $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);
        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/pages/$page->id/edit";
        }

        return view('site.v3.templates.pages.page', compact('page', 'breadcrumbs', 'editLink'));
    }
}
