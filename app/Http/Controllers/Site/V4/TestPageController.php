<?php

namespace App\Http\Controllers\Site\V4;

use App\Http\Controllers\Controller;

class TestPageController extends Controller
{
    public function index()
    {
        return view('design-system.v4.templates.test.index');
    }
}
