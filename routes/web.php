<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

include 'site.php';

include 'admin.php';

Route::get('import/blog', [App\Http\Controllers\ImportController::class, 'runBlog']);
Route::get('import/employee', [App\Http\Controllers\ImportController::class, 'runEmployee']);
Route::get('import/companies', [App\Http\Controllers\ImportController::class, 'runCompanies']);
Route::get('import/courses', [App\Http\Controllers\ImportController::class, 'runcourses']);
Route::get('import/set-correct-breadcrumbs', [App\Http\Controllers\ImportController::class, 'setCorrectBreadcrumbs']);

