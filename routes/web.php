<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/content/{id}', [ImageController::class, 'index']);
Route::get('/content/edit/{id}', [ImageController::class, 'edit']);
Route::get('/content/delete/{id}', [ImageController::class, 'delete']);

Route::post('/upload/file', [HomeController::class, 'upload']);