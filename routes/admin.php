<?php

use App\Http\Controllers\Admin\IndexPage\IndexPageController;

use App\Http\Controllers\Admin\Pages\PagesController;
use App\Http\Controllers\Admin\Posts\PostCategoriesController;
use App\Http\Controllers\Admin\Posts\PostsController;

use App\Http\Controllers\Admin\Employees\EmployeesController;
use App\Http\Controllers\Admin\ShortCodes\ShortCodesController;
use App\Http\Controllers\Admin\SeoForPage\SeoForPageController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('demo', [IndexPageController::class, 'demo']);
    Route::get('index', [IndexPageController::class, 'index'])->name('index');

    // education section


    // info section
    Route::resource('posts', PostsController::class)->except('show');
    Route::resource('post-categories', PostCategoriesController::class)->except('show');
    Route::resource('pages', PagesController::class)->except('show');

    // admin section
    Route::resource('employees', EmployeesController::class)->except('show');
    Route::get('short-codes', [ShortCodesController::class, 'index'])->name('short-codes.index')->except('show');
    Route::resource('seo-for-pages', SeoForPageController::class)->except('show');

});


