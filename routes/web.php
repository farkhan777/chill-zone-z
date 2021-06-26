<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

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

Route::get('/', function () {
    return view('guide');
})->name('home.index');

Route::get('/admin', function () {
    return view('index');
})->name('dashboard.index');

Route::resource('blogcategories', BlogCategoryController::class);
Route::resource('blogs', BlogController::class);
Route::resource('blogtags', BlogTagController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);