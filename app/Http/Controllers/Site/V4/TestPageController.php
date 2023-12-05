<?php

namespace App\Http\Controllers\Site\V4;

use App\Http\Controllers\Controller;

class TestPageController extends Controller
{
    public function index()
    {
        return view('site.v4.templates.test.test');
    }
}
