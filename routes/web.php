<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompetitieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LidController;
use App\Http\Controllers\WedstrijdController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/wedstrijden', [WedstrijdController::class, 'index'])->name('wedstrijden');
    Route::get('/leden', [LidController::class, 'index'])->name('leden');
    Route::get('/competitie', [CompetitieController::class, 'index'])->name('competitie');
    Route::post('/uitloggen', [WedstrijdController::class, 'index'])->name('uitloggen');
});


Route::get('/inloggen', [AuthController::class, 'index'])->name('login');
Route::post('/inloggen/post', [AuthController::class, 'login'])->name('login.post');
