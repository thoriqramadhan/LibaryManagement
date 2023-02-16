<?php

use App\Http\Controllers\libaryController;
use App\Models\libary;
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

Route::get('/list',[libaryController::class, 'index']);
Route::get('/list/create',[libaryController::class, 'create']);
Route::post('/list', [libaryController::class, 'store']);
Route::get('/list/{id]',[libaryController::class, 'show'] );
Route::get('/list/{id}/edit',[libaryController::class, 'edit']);
Route::patch('/list/{id}',[libaryController::class, 'update']);
Route::delete('/list/{id}', [libaryController::class, 'delete']);
