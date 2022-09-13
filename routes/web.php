<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::name('blog.')->group(function () {
    Route::get('/blog', [PostController::class, 'list'])->name('list');
    Route::get('/blog/{slug}', [PostController::class, 'view'])->name('view');
});

Route::get('/tags', [TagController::class, 'index'])->name('tags');

Route::get('/tags/{slug}', [TagController::class, 'view'])->name('tags.view');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/post', function () {
        return Inertia::render('Post');
    })->name('post');

    Route::get('/setting', function () {
        return Inertia::render('Setting');
    })->name('setting');
});

Route::get('/backtologin', function () {
    return Inertia::render('BackToLogin');
})->name('backtologin');

require __DIR__.'/auth.php';
