<?php

Route::prefix('admin')->group(function () {
    Route::get('demo', [App\Http\Controllers\Admin\IndexPage\IndexPageController::class, 'demo']);
    Route::get('index', [App\Http\Controllers\Admin\IndexPage\IndexPageController::class, 'index']);
});


