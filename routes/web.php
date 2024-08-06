<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/* 
* route::get     | consultar
* route::post    | guardar
* route::delete  | eliminar
* route::put     | sctualizar 
*/
/*
*   Route::get('/', [PageController::class, 'home'])->name('Home');
*   Route::get('Blog', [PageController::class, 'blog'])->name('Blog');
*   Route::get('Blog/{slug}', [PageController::class, 'post'])->name('Post');
*/

Route::controller(PageController::class)->group(function () {
    
    Route::get('/', 'home')->name('Home');

    Route::get('Blog', 'blog')->name('Blog');

    Route::get('Blog/{post:slug}', 'post')->name('Post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts',PostController::class)->except(['show']);

require __DIR__.'/auth.php';
