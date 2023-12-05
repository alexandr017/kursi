<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::prefix('auth')->group(function () {
    Route::get('/', function () {
        return view('auth.auth');
    });
    Route::get('/login', function () {
        return view('auth.auth');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });

    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::get('design-system', [App\Http\Controllers\DesignSystemController::class, 'index']);
Route::get('design-system/templates', [App\Http\Controllers\DesignSystemController::class, 'templates']);
Route::get('design-system/{component}', [App\Http\Controllers\DesignSystemController::class, 'component']);

Route::get('test-page', [App\Http\Controllers\Site\V4\TestPageController::class, 'index']);
Route::get('load-scripts', [App\Http\Controllers\Site\JsScriptsController::class, 'index']);
