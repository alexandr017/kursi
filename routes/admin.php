<?php

use App\Http\Controllers\Admin\IndexPage\IndexPageController;

use App\Http\Controllers\Admin\Listings\ListingsController;
use App\Http\Controllers\Admin\Companies\CompaniesController;
use App\Http\Controllers\Admin\Companies\CompanyReviewsController;
use App\Http\Controllers\Admin\Courses\CoursesController;
use App\Http\Controllers\Admin\Courses\CourseTagsController;

use App\Http\Controllers\Admin\Pages\PagesController;
use App\Http\Controllers\Admin\Posts\PostCategoriesController;
use App\Http\Controllers\Admin\Posts\PostsController;
use App\Http\Controllers\Admin\Posts\PostCommentsController;

use App\Http\Controllers\Admin\Employees\EmployeesController;
use App\Http\Controllers\Admin\ShortCodes\ShortCodesController;
use App\Http\Controllers\Admin\StaticPages\StaticPagesController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('demo', [IndexPageController::class, 'demo']);
    Route::get('index', [IndexPageController::class, 'index'])->name('index');

    // education section
    Route::resource('listings', ListingsController::class)->except('show');
    Route::resource('companies', CompaniesController::class)->except('show');
    Route::resource('company-reviews', CompanyReviewsController::class)->except('show');
    Route::resource('courses', CoursesController::class)->except('show');
    Route::resource('course-tags', CourseTagsController::class)->except('show');


    // info section
    Route::resource('posts', PostsController::class)->except('show');
    Route::resource('post-categories', PostCategoriesController::class)->except('show');
    Route::resource('post-comments', PostCommentsController::class)->except('show');
    Route::resource('pages', PagesController::class)->except('show');

    // admin section
    Route::resource('employees', EmployeesController::class)->except('show');
    Route::get('short-codes', [ShortCodesController::class, 'index'])->name('short-codes.index');
    Route::resource('static-pages', StaticPagesController::class)->except(['show', 'destroy']);

});
