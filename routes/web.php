<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/belongsTo',[HomeController::class,'getProject'])->name('belongsTo');
Route::get('/hasOne',[HomeController::class,'getStudent'])->name('hasOne');
Route::get('/hasMany',[HomeController::class,'getStudents'])->name('hasMany');
Route::get('/latest',[HomeController::class,'getLatestStudent'])->name('hasOneOfMany');
Route::get('/oldest',[HomeController::class,'getOldestStudent'])->name('hasOneOfMany');
Route::get('/hasOneThrow',[HomeController::class,'getProjectCord'])->name('getProjectCord');
Route::get('hasManyThrow',[HomeController::class,'getProjectCords'])->name('hasManyThrow');