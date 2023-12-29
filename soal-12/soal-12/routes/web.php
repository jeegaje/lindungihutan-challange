<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Answer;
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
Route::get('/poin-1', [Answer::class,'poin1'])->name('poin-1');
Route::get('/poin-2', [Answer::class,'poin2'])->name('poin-2');
Route::get('/poin-3', [Answer::class,'poin3'])->name('poin-3');
Route::get('/poin-4', [Answer::class,'poin4'])->name('poin-4');
Route::get('/poin-5', [Answer::class,'poin5'])->name('poin-5');
Route::get('/poin-6', [Answer::class,'poin6'])->name('poin-6');
Route::get('/poin-7', [Answer::class,'poin7'])->name('poin-7');
Route::get('/poin-8', [Answer::class,'poin8'])->name('poin-8');
Route::get('/poin-9', [Answer::class,'poin9'])->name('poin-9');
Route::get('/poin-10', [Answer::class,'poin10'])->name('poin-10');
