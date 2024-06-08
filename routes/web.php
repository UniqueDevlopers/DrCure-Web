<?php

use App\Http\Controllers\ManageContent;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/slider-manage', [ManageContent::class, 'sliderManage'])->name('slider-manage');
    Route::post('/slider-post', [ManageContent::class, 'sliderPost'])->name('slider-post');
    Route::get('/store-manage', [ManageContent::class, 'storeManage'])->name('store-manage');
    Route::post('/store-post', [ManageContent::class, 'storePost'])->name('store-post');
    Route::get('/hero-banner-picture', [ManageContent::class, 'heroManage'])->name('hero-manage');
    Route::post('/hero-post', [ManageContent::class, 'heroPost'])->name('hero-post');
    Route::get('/product-manage', [ManageContent::class, 'product'])->name('product-manage');
    Route::post('/product-post', [ManageContent::class, 'productPost'])->name('product-post');
    Route::get('/promise-manage', [ManageContent::class, 'wePromise'])->name('promise-manage');
    Route::post('/promise-post', [ManageContent::class, 'promisePost'])->name('promise-post');
    Route::get('/settings', [ManageContent::class, 'settings'])->name('settings');
    Route::post('/settings-post', [ManageContent::class, 'settingsPost'])->name('settings-post');
});



require __DIR__ . '/auth.php';
