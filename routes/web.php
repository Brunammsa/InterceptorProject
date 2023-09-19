<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MoviesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/search-film', function () {
//     return view('search-film');
// })->middleware(['auth', 'verified'])->name('search-film');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/search-film', [MoviesController::class, 'search'])->name('search.search');
    Route::get('/recent-searches', [MoviesController::class, 'recentSearchs'])->name('search.recentSearchs');
    Route::get('/plataforms', [MoviesController::class, 'editPlataform'])->name('search.editPlataform');
    Route::get('/index-movie', [MoviesController::class, 'indexMovie'])->name('search.indexMovie');
    Route::patch('/plataforms', [MoviesController::class, 'updatePlataform'])->name('search.updatePlataform');
});

require __DIR__.'/auth.php';
