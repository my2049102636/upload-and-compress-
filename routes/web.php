<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ImageController::class, 'create'])->name('image.create');
Route::post('/', [ImageController::class, 'store'])->name('image.store');
Route::get('/download/{id}', [ImageController::class, 'download'])->name('image.download');