<?php

use App\Http\Controllers\Site\V3\BackCall\BackCallController;
use App\Http\Controllers\Site\V3\Catalog\CatalogController;
use App\Http\Controllers\Site\V3\Comments\CommentsController;
use App\Http\Controllers\Site\V3\CompanyReviews\CompanyReviewController;
use App\Http\Controllers\Site\V3\Courses\CoursesController;
use App\Http\Controllers\Site\V3\EmployeeRating\EmployeeRatingController;
use App\Http\Controllers\Site\V3\ListingRating\ListingRatingController;
use App\Http\Controllers\Site\V3\Question\QuestionController;
use App\Http\Controllers\Site\V3\Subscribe\SubscribeController;
use App\Http\Controllers\Site\V3\Tags\TagController;
use App\Http\Controllers\Site\V3\RatingPages\RatingPagesController;

Route::get('/', [App\Http\Controllers\Site\V3\IndexPage\IndexPageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Site\V3\About\AboutPageIndexController::class, 'index']);
Route::get('/contacts', [App\Http\Controllers\Site\V3\Contacts\ContactsPageController::class, 'index']);

Route::get('/znaniya', [App\Http\Controllers\Site\V3\BlogIndexPage\BlogIndexPageController::class, 'index']);
Route::get('/znaniya/page/{pageNumber}', [App\Http\Controllers\Site\V3\BlogIndexPage\BlogIndexPageController::class, 'index']);
Route::get('/schools', [\App\Http\Controllers\Site\V3\DynamicPages\IndexCompaniesMainPageController::class, 'index']);
Route::prefix('/search')->group(function () {
    Route::get('/', [\App\Http\Controllers\Site\V3\Search\SearchController::class, 'search']);
    Route::get('/companies', [\App\Http\Controllers\Site\V3\Search\SearchController::class, 'searchCompanies']);
    Route::get('/courses', [\App\Http\Controllers\Site\V3\Search\SearchController::class, 'searchCourses']);
    Route::get('/posts', [\App\Http\Controllers\Site\V3\Search\SearchController::class, 'searchPosts']);
});


Route::view('tvoy-edtech', 'site.landings.tvoy-edtech');

Route::fallback(function(){
    return (new App\Http\Controllers\Site\V3\DynamicSiteController())->render();
});

Route::post('fetch/rating/add-vote', [RatingPagesController::class, 'rate']);

Route::post('/{post_id}/comments', [CommentsController::class, 'create']);
Route::get('/listings/{listing_id}/courses', [CoursesController::class, 'index']);
Route::post('/listings/{listing_id}/review', [ListingRatingController::class, 'create']);
Route::get('/catalog/listings/{path}', [CatalogController::class, 'getChildes']);

Route::get('companies/{company_id}/reviews', [CompanyReviewController::class, 'index']);
Route::post('companies/{company_id}/reviews', [CompanyReviewController::class, 'create']);
Route::post('employee/{employee_id}/rate', [EmployeeRatingController::class, 'rate']);
Route::post('/subscribe', [SubscribeController::class, 'subscribe']);
Route::post('/question', [QuestionController::class, 'create']);
Route::post('/back-call', [BackCallController::class, 'create']);


include "site-sitemap.php";
