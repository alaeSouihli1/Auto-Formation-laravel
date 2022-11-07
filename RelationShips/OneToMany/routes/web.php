<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\TacheController;


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

Route::resource('briefs',BriefController::class);
Route::resource('taches',TacheController::class);
Route::get('taches/create/{id}',[TacheController::class,'create'])->name('taches.create');
Route::get('search',[BriefController::class,'search']);
Route::get('search2',[TacheController::class,'search2']);



