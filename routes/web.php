<?php

use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::post('/user', [RequestController::class, 'getName']);
Route::get('/user-agent', [RequestController::class, 'userAgent']);
Route::get('/page', [RequestController::class, 'getPage']);
Route::get('/info', [RequestController::class, 'getInfo']);
Route::post('/file', [RequestController::class, 'formData']);
Route::get('/cookie', [RequestController::class, 'getCookie']);
Route::post('/submit', [RequestController::class, 'dataPost']);

