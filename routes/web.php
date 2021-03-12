<?php

use App\Http\Controllers\AdeuniscarController;
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

Route::get('/', [AdeuniscarController::class, 'index']);

Route::get('/nos-voitures', [AdeuniscarController::class, 'cars_list']);

Route::get('/conditions', [AdeuniscarController::class, 'terms']);

Route::get('/contact', [AdeuniscarController::class, 'contact']);
