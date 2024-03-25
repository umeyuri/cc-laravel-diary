<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DiaryController;

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


Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diaries/create', [DiaryController::class, 'create']);
Route::post('/diaries', [DiaryController::class, 'store']);
Route::get('/diaries/{id}/edit', [DiaryController::class, 'edit']);
Route::patch('/diaries/{id}', [DiaryController::class, 'update']);
Route::delete('/diaries/{id}', [DiaryController::class, 'destroy']);