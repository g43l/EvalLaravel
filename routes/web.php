<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;

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

Route::get('/opinion', [OpinionController::class, 'index'])->name('opinion');
Route::get('opinion/create', [OpinionController::class, 'createOpinion'])->name('createOpinion');
Route::post('opinion/create', [OpinionController::class, 'createOpinionPost'])->name('createOpinionPost');






