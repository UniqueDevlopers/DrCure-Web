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
});



require __DIR__ . '/auth.php';
