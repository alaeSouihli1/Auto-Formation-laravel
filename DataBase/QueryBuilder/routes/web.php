<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

//exemple 1
Route::get('/get-data',[UserController::class,'index']);

//exemple 2
Route::get('/promotions',[UserController::class,'afficher']);


//exemple 3
Route::get('/promotions3',[UserController::class,'show']);

//exemple 4

// Route::get('/page/{id}',[UserController::class,'afficherParID']);

// exemple 5
Route::get('/first',[UserController::class,'first']);

// exemple 6
Route::get('/count',[UserController::class,'count']);


// exemple 7
Route::get('/max',[UserController::class,'count']);


// exemple 8
Route::get('/select',[UserController::class,'select']);


// exemple 8
Route::get('/join',[UserController::class,'join']);






