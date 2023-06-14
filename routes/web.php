<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomAuthController;

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
Route::prefix('v1/auth/')->group(function () {
        // Matches The "/v1/auth" URL
        Route::get('login', [CustomAuthController::class,'Login'])->name('auth.showLoginForm');
        Route::get('showlogin', [CustomAuthController::class,'Login'])->name('login');
        Route::post('login',[CustomAuthController::class,'customLogin'])->name('auth.customLogin');
        Route::get('register',[CustomAuthController::class,'Register'])->name('auth.showRegisterForm');
        Route::post('register',[CustomAuthController::class,'customRegister'])->name('auth.customRegister');
        Route::get('logout',[CustomAuthController::class,'Logout'])->name('auth.logout');
        Route::get('dashboard',[CustomAuthController::class,'Dashboard'])->name('auth.dashboard');
});
Route::prefix('v1/password/')->group(function (){
//    Route::get('/confirm',[\App\Http\Controllers\Auth\Custom\AuthController::class,'showConfirmForm'])->name('confirm');
//    Route::post('/confirm',[\App\Http\Controllers\Auth\Custom\AuthController::class,'confirm'])->name('password.confirm.custom.post');
//    Route::post('/email',[\App\Http\Controllers\Auth\Custom\AuthController::class,'sendResetLinkEmail'])->name('password.email.custom');
//    Route::get('/reset',[\App\Http\Controllers\Auth\Custom\AuthController::class,'showLinkRequestForm'])->name('reset');
//    Route::post('/reset',[\App\Http\Controllers\Auth\Custom\AuthController::class,'reset'])->name('password.reset.custom.post');
//    Route::get('/reset/{token}',[\App\Http\Controllers\Auth\Custom\AuthController::class,'showResetForm'])->name('password.reset.custom.showform');

});





