<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

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

Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

//about
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/get-sensor', [Dashboard::class, 'getSensor']);
Route::get('/get-ultrasonic-history', [Dashboard::class, 'getHistoryUltrasonic']);
Route::get('/get-flowmeter-history', [Dashboard::class, 'getHistoryFlowmeter']);
