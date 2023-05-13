<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/home', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/catalogue', [SiteController::class, 'catalogue']);
Route::get('/promotion', [SiteController::class, 'promotion']);
Route::post('/promotion', [SiteController::class, 'form']);



