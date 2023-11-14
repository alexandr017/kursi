<?php

namespace App\Http\Controllers\Site\V3\SItemap\HTML;

use App\Http\Controllers\Controller;
use App\Models\Companies\Company;
use App\Models\Listing\Listing;
use App\Models\Pages\Page;
use App\Models\StaticPages\StaticPage;
use App\Models\Urls\Url;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View;

class HTMLSitemapController extends Controller
{
    const SECTION_POST_CATEGORY_TYPE_ID =  2;
    const SECTION_LISTING_TYPE_ID =  6;
    const SEO_FOR_PAGE_ID = 6;

    public function index()
    {
        $postCategories = \DB::table('post_categories')
            ->select(['post_categories.h1', 'urls.url'])
            ->leftJoin('urls', 'post_categories.id', 'urls.section_id')
            ->where(['post_categories.status' => 1, 'urls.section_type' => HTMLSitemapController::SECTION_POST_CATEGORY_TYPE_ID])
            ->whereNull('post_categories.deleted_at')
            ->get();

        $page = StaticPage::query()->where('id', self::SEO_FOR_PAGE_ID)->first();
        $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);

        return view('site.v3.templates.sitemap.sitemap', compact('postCategories', 'page', 'breadcrumbs'));
    }

    public function coursesCategories($alias)
    {
        $url = Url::query()
            ->where('url', $alias)
            ->where('section_type', self::SECTION_LISTING_TYPE_ID)
            ->first();

        $listing = Listing::query()->where('id', $url->section_id)
            ->with(['url','childes' => function($q) {
                $q->with(['url','childes']);
            }])->first();

        $page = new StaticPage([
            'h1' => "Карта сайта Курсы.ру раздела «$listing->name" . '»',
            'title' => "Карта сайта Курсы.ру раздела «$listing->name" . '»',
            'meta_description' => "Карта сайта Курсы.ру раздела «$listing->name" . "» для навигации пользователей.",
        ]);

        $breadcrumbs = BreadcrumbsRender::get($listing->breadcrumbs_sitemap, $listing->h1);

        return view('site.v3.templates.sitemap.sitemap-listing', compact('listing', 'breadcrumbs', 'page'));
    }

    public function schools()
    {
        $companies = Company::query()->whereNull('deleted_at')->get();
        $breadcrumbs = 'Карта сайта@sitemap' . PHP_EOL . 'Список онлайн-школ';
        $breadcrumbs = BreadcrumbsRender::get($breadcrumbs, 'Список онлайн-школ');

        return view('site.v3.templates.sitemap.sitemap-companies', compact('companies', 'breadcrumbs'));

    }
}
