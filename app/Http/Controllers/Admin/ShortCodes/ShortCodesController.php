<?php

namespace App\Http\Controllers\Admin\ShortCodes;

use App\Http\Controllers\Admin\AdminController;

class ShortCodesController extends AdminController
{
    public function index()
    {
        $breadcrumbs = [['h1' => 'Шорткоды']];

        return view('admin.v2.short-codes.index', compact('breadcrumbs'));
    }
}
