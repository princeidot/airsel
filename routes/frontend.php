<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('home');
Route::get('about-us', [App\Http\Controllers\Frontend\FrontendController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact'])->name('contact');
Route::get('our-products', [App\Http\Controllers\Frontend\FrontendController::class, 'ourproduct'])->name('ourproduct');
Route::get('our-products/aeropower', [App\Http\Controllers\Frontend\FrontendController::class, 'aeropower'])->name('product.aeropower');
Route::get('our-products/grating', [App\Http\Controllers\Frontend\FrontendController::class, 'grating'])->name('product.grating');
Route::get('our-products/hot-dip-galvanizing', [App\Http\Controllers\Frontend\FrontendController::class, 'galvanizing'])->name('product.galvanizing');
Route::get('our-products/airseal', [App\Http\Controllers\Frontend\FrontendController::class, 'airseal'])->name('product.airseal');
Route::get('blog', [App\Http\Controllers\Frontend\FrontendController::class, 'blog'])->name('blog');
Route::get('blog/{url}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogsingle'])->name('blog.single');

Route::get('coming-soon', [App\Http\Controllers\Frontend\FrontendController::class, 'csoon'])->name('csoon.airseal');



Route::post('contactdata', [App\Http\Controllers\Frontend\FrontendController::class, 'store'])->name('contact.us.store');
Route::get('thank-you',[App\Http\Controllers\Frontend\FrontendController::class, 'thankyou'])->name('contact.thankyou');
