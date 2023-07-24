<?php

namespace App\Http\Controllers\Site\V3\IndexPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function index()
    {
        $pages = \DB::table('urls')->get();

        foreach ($pages as $page) {
            echo "<a href='$page->url'>$page->url</a><br>";
        }
        exit;
        dd('index page');
    }
}
