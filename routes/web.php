<?php

use App\Http\Controllers\AnimalsController;
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

Route::get('/admin/create', [AnimalsController::class, 'create'])->name('create');

Route::post('/admin/post', [AnimalsController::class, 'store']);

Route::delete('/delete/{id}', [AnimalsController::class, 'destroy']);

Route::get('/admin/{id}/edit', [AnimalsController::class, 'edit']);

Route::put('/admin/{id}/update', [AnimalsController::class, 'update']);