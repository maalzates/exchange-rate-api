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
Route::get('/rates', [ExchangeRateController::class, 'index'])->name('rates.index')->middleware('log.access'); // Here we used a middleware to catch the access logs

// Getting access log route 
Route::get('/access-logs', [AccessLogController::class, 'index'])->name('logs.index');
