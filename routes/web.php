<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;


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

// Route::get('/', function () {
//     return view('home');
// })->name('home.index');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.index');

Route::get('/author', function () {
    return view('author');
})->name('author.index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.index');

Route::get('/faq', function () {
    return view('faq');
})->name('faq.index');

Route::get('/admin', function () {
    return view('index');
})->name('dashboard.index');

Route::resource('blogcategories', BlogCategoryController::class);
Route::resource('blogs', BlogController::class);
Route::resource('blogtags', BlogTagController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);
Route::get('/',[HomeController::class, 'show'])->name('home.index');
Route::get('/gallery',[GalleryController::class, 'show'])->name('gallery.index');