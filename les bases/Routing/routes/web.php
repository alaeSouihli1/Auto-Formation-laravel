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

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/user', [UserController::class,'index']);

Route::match(['get','post'],'/getPost',function(){
    return 'matching get and post';
});

Route::any('/any',function(){
    return 'type any';
});

