<?php

namespace App\Http\Controllers\Site\V3\SItemap\HTML;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HTMLSitemapController extends Controller
{
    public function index()
    {
        define('SECTION_POST_CATEGORY_TYPE_ID', 2);

        $postCategories = DB::table('post_categories')
            ->select('post_categories.h1', 'urls.url')
            ->leftJoin('urls', 'post_categories.id', 'urls.section_id')
            ->where(['post_categories.status' => 1, 'urls.section_type' => SECTION_POST_CATEGORY_TYPE_ID])
            ->whereNull('post_categories.deleted_at')
            ->get();

        return view('site.v3.templates.sitemap.sitemap', compact('postCategories'));
    }

    public function coursesCategories($alias)
    {
        //todo $alias защитить н всякий случай от интекций, то есть очистить
        dd(1);
    }
}
