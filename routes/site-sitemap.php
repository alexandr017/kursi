<?php


// sitemap (html)
Route::get('sitemap', [App\Http\Controllers\Site\V3\SItemap\HTML\HTMLSitemapController::class, 'index']);
Route::get('sitemap/kursy/{alias}', [App\Http\Controllers\Site\V3\SItemap\HTML\HTMLSitemapController::class, 'coursesCategories']);


// schools

// sitemap (xml)
Route::get('sitemap.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'index']);
Route::get('xml-style.xsl', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'style']);
Route::get('pages.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'pages']);
Route::get('posts-categories.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'postsCategories']);
Route::get('posts.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'posts']);
Route::get('employees.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'employees']);
Route::get('companies.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'companies']);
Route::get('listings.xml', [App\Http\Controllers\Site\V3\SItemap\XML\XMLSitemapController::class, 'listings']);
