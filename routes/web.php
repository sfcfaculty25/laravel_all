<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\MainController;
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



Route::get("index",[infoController::class,"index"]);

Route::get('create',[infoController::class,'create']);

Route::post('insert',[infoController::class,'insert'])->name('insert');

Route::get('login',[infoController::class,'login']);

Route::get('select',[infoController::class,'select']);

Route::get('delete/{id}',[infoController::class,'delete']);
Route::get('update/{id}',[infoController::class,'update']);
Route::post('save/{id}',[infoController::class,'savedata'])->name('save');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home',[MainController::class,'index']);