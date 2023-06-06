<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('v1/auth')->group(function () {
        // Matches The "/api/v1/auth" URL
        Route::get('login',[\App\Http\Controllers\Auth\AuthController::class, 'showloginForm'])->name('auth.showloginform');
        Route::post('login',[\App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('auth.login');

});





