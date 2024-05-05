<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DemoController;
use App\Http\Controllers\CvController;

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


Route::resource('', CvController::class)->names('cv_genarate');
Route::resource('demo', DemoController::class)->names('demo');


