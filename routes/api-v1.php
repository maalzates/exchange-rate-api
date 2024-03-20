<?php

use App\Http\Controllers\Api\AccessLogController;
use App\Http\Controllers\Api\ExchangeRateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Getting rates route
Route::get('/rates', [ExchangeRateController::class, 'index'])->name('rates.index');

Route::get('/access-logs', [AccessLogController::class, 'index'])->name('logs.index');
