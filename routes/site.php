<?php
use App\Http\Controllers\Site\V3\Comments\CommentsController;
use App\Http\Controllers\Site\V3\CompanyReviews\CompanyReviewController;
use App\Http\Controllers\Site\V3\Courses\CoursesController;
use App\Http\Controllers\Site\V3\ListingRating\ListingRatingController;
use App\Http\Controllers\Site\V3\Tags\TagController;

Route::get('/', [App\Http\Controllers\Site\V3\IndexPage\IndexPageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Site\V3\About\AboutPageIndexController::class, 'index']);

Route::get('/znaniya', [App\Http\Controllers\Site\V3\BlogIndexPage\BlogIndexPageController::class, 'index']);
Route::get('/schools', [\App\Http\Controllers\Site\V3\DynamicPages\IndexCompaniesMainPageController::class, 'index']);
// about
// search (post)
// schools
// contacts

Route::fallback(function(){
    return (new App\Http\Controllers\Site\V3\DynamicSiteController())->render();
});

Route::post('/{post_id}/comments', [CommentsController::class, 'create']);
//Route::get('/{listing_id}/courses', [CoursesController::class, 'index']); // todo отключил так как конфликтует с роутом админки /admin/courses
Route::post('/listings/{listing_id}/review', [ListingRatingController::class, 'create']);

Route::get('companies/{company_id}/reviews', [CompanyReviewController::class, 'index']);
Route::post('companies/{company_id}/reviews', [CompanyReviewController::class, 'create']);


include "site-sitemap.php";
