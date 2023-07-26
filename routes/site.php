<?php
use App\Http\Controllers\Site\V3\Comments\CommentsController;

Route::get('/', [App\Http\Controllers\Site\V3\IndexPage\IndexPageController::class, 'index']);

Route::get('/znaniya', [App\Http\Controllers\Site\V3\BlogIndexPage\BlogIndexPageController::class, 'index']);
// about
// search (post)
// schools
// contacts

Route::fallback(function(){
    return (new App\Http\Controllers\Site\V3\DynamicSiteController())->render();
});

Route::post('/{post_id}/comments', [CommentsController::class, 'create']);

include "site-sitemap.php";
