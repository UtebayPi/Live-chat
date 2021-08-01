<?php

use Illuminate\Support\Facades\Route;
use App\Events\MyEvent;
use App\Http\Controllers\MessagerController;
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

Route::get('/', [MessagerController::class, 'index']);
Route::post('/sender', [MessagerController::class, 'sender']);

Route::get('/site', [MessagerController::class, 'site']);
Route::get('/about', [MessagerController::class, 'about']);