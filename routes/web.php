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

Route::post('/campings', [CampingController::class, 'store']);
Route::get('/campings/create', [CampingController::class, 'create'])->name('campings.create');
Route::get('/campings/{camping}', [CampingController::class, 'show'])->name('campings.show'); 
Route::get('/campings/{camping}/edit', [CampingController::class, 'edit'])->name('campings.edit'); ;
Route::put('/campings/{camping}', [CampingController::class, 'update']);
