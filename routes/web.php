<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::middleware(['guest'])->group(function(){

    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

    Route::post('/login', [LoginController::class, 'processLogin'])->name('process.login');

});

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});
