<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/frontend.php';
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('sitemap_index.xml', [App\Http\Controllers\Frontend\FrontendController::class, 'sitemap'])->name('sitemap');
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard/blog', [App\Http\Controllers\BlogadminController::class, 'index'])->name('dashboard.blog');
    Route::get('dashboard/addblog', [App\Http\Controllers\BlogadminController::class, 'add'])->name('blog.add');
    Route::post('dashboard/saveblog', [App\Http\Controllers\BlogadminController::class, 'saveblog'])->name('admin.saveblog');
    Route::get('dashboard/listblog', [App\Http\Controllers\BlogadminController::class, 'listblog'])->name('admin.listblog');
    Route::get('dashboard/blogedit/{id}', [App\Http\Controllers\BlogadminController::class, 'editblog'])->name('admin.editblog');
    Route::post('dashboard/blogupdate/{id}', [App\Http\Controllers\BlogadminController::class, 'updateblog'])->name('admin.updateblog');
    Route::delete('dashboard/blogdelete/{id}', [App\Http\Controllers\BlogadminController::class, 'bdelete'])->name('blog.delete');

});