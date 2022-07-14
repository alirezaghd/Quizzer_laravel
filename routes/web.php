<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizzController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/question/{id}',[QuizzController::class, "index"]);
Route::get('/score',[QuizzController::class, "score"]);
Route::get('/admin',[QuizzController::class, "index_admin"]);
Route::post('/new_questions' , [QuizzController::class,"new_questions"]);
Route::post('/check-answer',[QuizzController::class, "check"]);
