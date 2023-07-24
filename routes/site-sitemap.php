<?php

// sitemap
Route::get('sitemap', [App\Http\Controllers\Site\V3\SItemap\HTML\HTMLSitemapController::class, 'index']);
Route::get('sitemap/kursy/{alias}', [App\Http\Controllers\Site\V3\SItemap\HTML\HTMLSitemapController::class, 'coursesCategories']);


// schools
