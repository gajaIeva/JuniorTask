<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampingController;

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
    return view('welcome');
});

Route::get('/campings', [CampingController::class, 'index'])->name('campings.index');

// Route::post('/articles', [ArticlesController::class, 'store']);
Route::get('/campings/create', [CampingController::class, 'create'])->name('campings.create');
Route::get('/campings/{camping}', [CampingController::class, 'show'])->name('campings.show'); 
// Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
// Route::put('/articles/{article}', [ArticlesController::class, 'update']);
