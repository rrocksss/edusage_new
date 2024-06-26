<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoadedController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RecommendationController;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/loaded', [LoadedController::class, 'loaded']);
Route::get('/form/{question_id}', [FormController::class, 'index']);
Route::post('/form/{question_id}', [FormController::class, 'storeForm1Data']);
Route::get('/result', [ResultController::class, 'index']);
Route::get('/recommendation/{major_name}', [RecommendationController::class, 'index']);
