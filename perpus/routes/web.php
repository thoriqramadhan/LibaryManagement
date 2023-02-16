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

Route::get('/list',[libaryController::class, 'index'])->middleware('auth');
Route::get('/list/create',[libaryController::class, 'create'])->middleware('is_admin');
Route::post('/list', [libaryController::class, 'store'])->middleware('is_admin');
Route::get('/list/{id]',[libaryController::class, 'show'] );
Route::get('/list/{id}/edit',[libaryController::class, 'edit'])->middleware('is_admin');
Route::patch('/list/{id}',[libaryController::class, 'update'])->middleware('is_admin');
Route::delete('/list/{id}', [libaryController::class, 'delete'])->middleware('is_admin');
