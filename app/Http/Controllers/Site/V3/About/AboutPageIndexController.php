<?php

namespace App\Http\Controllers\Site\V3\About;

use App\Http\Controllers\Controller;
use App\Models\History\History;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use Illuminate\Http\Request;

class AboutPageIndexController extends Controller
{
    private const SEO_PAGE_ID = 2;

    private const EMPLOYEES_SECTION_TYPE_ID = 4;


    public function index()
    {
        // todo: можно написать более красиво через репозиторий
        $page = \DB::table('seo_for_pages')->where(['id' => self::SEO_PAGE_ID])->first();

        $countSchools = \DB::table('companies')
            ->where(['status' => 1])
            ->whereNull('deleted_at')
            ->count();

        $coursesCount = \DB::table('courses')
            ->where(['status' => 1])
            ->whereNull('deleted_at')
            ->count();

        $employeesCount = \DB::table('employees')
            ->where(['status' => 1])
            ->whereNull('deleted_at')
            ->count();

        // todo: на момент запувка парсера нет таблицы с отзывами
        $reviewsCount = \DB::table('school_reviews')
            ->where(['status' => 1])
            ->count();

        $team = \DB::table('employees')
            ->leftJoin('urls', 'employees.id', 'urls.section_id')
            ->select('employees.*', 'urls.url')
            ->where(['employees.status' => 1, 'urls.section_type' => self::EMPLOYEES_SECTION_TYPE_ID])
            ->whereNull('employees.deleted_at')
            ->orderBy('employees.sort_order')
            ->get();

        if ($page == null) {
            abort(404);
        }

        $histories = History::query()
            ->orderBy('step')
            ->get();

        $breadcrumbs = BreadcrumbsRender::get($page->breadcrumbs, $page->h1);

        $editLink = "/admin/static-pages/".self::SEO_PAGE_ID."/edit";

        return view('site.v3.templates.about.index.index-page', compact('page', 'countSchools', 'coursesCount', 'employeesCount', 'reviewsCount', 'team', 'histories', 'breadcrumbs', 'editLink'));
    }
}
