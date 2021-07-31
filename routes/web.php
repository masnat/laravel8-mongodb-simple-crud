<?php

use App\Http\Controllers\CarController;
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

Route::get('car/add', [CarController::class, 'create']);
Route::post('car/add', [CarController::class, 'store']);
Route::get('car', [CarController::class, 'index']);
Route::get('car/edit/{id}', [CarController::class, 'edit']);
Route::post('car/edit/{id}', [CarController::class, 'update']);
Route::delete('car/{id}', [CarController::class, 'destroy']);
