<?php

namespace App\Http\Controllers\Admin\IndexPage;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;

class IndexPageController extends AdminController
{
    public function index()
    {
        return view('admin.v2.index.index');
    }

    public function demo()
    {
        return view('admin.v2.demo');
    }
}
