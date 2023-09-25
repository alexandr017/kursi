<?php

namespace App\Http\Controllers\Site\V3\SItemap\XML;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

// todo в будущем можно чуть чище написать, хотя и текущий код не критичный
class XMLSitemapController extends Controller
{
    const SECTION_PAGES_TYPE_ID =  1;
    const SECTION_POST_CATEGORY_TYPE_ID =  2;
    const SECTION_POSTS_TYPE_ID =  3;
    const SECTION_EMPLOYEES_TYPE_ID =  4;
    const SECTION_COMPANIES_TYPE_ID =  5;
    const SECTION_LISTINGS_TYPE_ID =  6;

    public function index()
    {
        return response()->view('site.sitemap-xml.index')->header('Content-type', 'text/xml');
    }

    public function pages()
    {
        $items = \DB::table('pages')
            ->select(['urls.url'])
            ->leftJoin('urls', 'pages.id', 'urls.section_id')
            ->where(['pages.status' => 1, 'urls.section_type' => XMLSitemapController::SECTION_PAGES_TYPE_ID])
            ->whereNull('pages.deleted_at')
            ->get();

        $items [] = (object) [
            'url' => 'object',
        ];

        $items [] = (object) [
            'url' => 'contacts',
        ];

        $items [] = (object) [
            'url' => 'znaniya',
        ];

        return response()->view('site.sitemap-xml.details', compact('items'))->header('Content-type', 'text/xml');
    }

    public function postsCategories()
    {
        $items = \DB::table('post_categories')
            ->select(['urls.url'])
            ->leftJoin('urls', 'post_categories.id', 'urls.section_id')
            ->where(['post_categories.status' => 1, 'urls.section_type' => XMLSitemapController::SECTION_POST_CATEGORY_TYPE_ID])
            ->whereNull('post_categories.deleted_at')
            ->get();

        return response()->view('site.sitemap-xml.details', compact('items'))->header('Content-type', 'text/xml');
    }

    public function posts()
    {
        $items = \DB::table('posts')
            ->select(['urls.url'])
            ->leftJoin('urls', 'posts.id', 'urls.section_id')
            ->where(['posts.status' => 1, 'urls.section_type' => XMLSitemapController::SECTION_POSTS_TYPE_ID])
            ->whereNull('posts.deleted_at')
            ->get();

        return response()->view('site.sitemap-xml.details', compact('items'))->header('Content-type', 'text/xml');
    }

    public function employees()
    {
        $items = \DB::table('employees')
            ->select(['urls.url'])
            ->leftJoin('urls', 'employees.id', 'urls.section_id')
            ->where(['employees.status' => 1, 'urls.section_type' => XMLSitemapController::SECTION_EMPLOYEES_TYPE_ID])
            ->whereNull('employees.deleted_at')
            ->get();

        return response()->view('site.sitemap-xml.details', compact('items'))->header('Content-type', 'text/xml');
    }


    public function companies()
    {
        $items = \DB::table('companies')
            ->select(['urls.url'])
            ->leftJoin('urls', 'companies.id', 'urls.section_id')
            ->where(['companies.status' => 1, 'urls.section_type' => XMLSitemapController::SECTION_COMPANIES_TYPE_ID])
            ->whereNull('companies.deleted_at')
            ->get();

        return response()->view('site.sitemap-xml.details', compact('items'))->header('Content-type', 'text/xml');
    }

    public function listings()
    {
        $items = \DB::table('listings')
            ->select(['urls.url'])
            ->leftJoin('urls', 'listings.id', 'urls.section_id')
            ->where(['listings.status' => 1, 'urls.section_type' => XMLSitemapController::SECTION_LISTINGS_TYPE_ID])
            ->whereNull('listings.deleted_at')
            ->get();

        return response()->view('site.sitemap-xml.details', compact('items'))->header('Content-type', 'text/xml');
    }

    public function style()
    {
        return response()->view('site.sitemap-xml.xml-style')->header('Content-type', 'text/xml');
    }

}
