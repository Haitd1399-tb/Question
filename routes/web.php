<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::resource('ListQuestion', QuestionController::class)->names('ListQuetion');
Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Webthi/AddQuestion', [App\Http\Controllers\QuestionController::class, 'addQuestion'])->name('AddQuestion');
