<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Answer;
use App\Http\Controllers\ArtisController;
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

Route::get('/', [Dashboard::class,'index'])->name('dashboard');
Route::post('/create', [ArtisController::class, 'create'])->name('artis.create');
Route::patch('/{kd_artis}/update', [ArtisController::class, 'update'])->name('artis.update');
Route::delete('/{kd_artis}/delete', [ArtisController::class, 'delete'])->name('artis.delete');
