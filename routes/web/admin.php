<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashboard\MainController;
use Illuminate\Auth\Notifications\ResetPassword;
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


/*
 | -----------------------------------------------------------------------------
 | Authentication Routes
 | -----------------------------------------------------------------------------
 | 
 | This route group uses the "auth" prefix and contains all of the
 | routes needed for authentication.
 */
Route::group([
    'namespace' => 'Auth',
    'prefix' => 'auth',
    'as' => 'auth.',
], function () {
    Route::get('login', [LoginController::class, 'login']);
    Route::post('login', [LoginController::class, 'handleLogin'])->name('login.handle');
    Route::get('forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
    Route::post('forgot-password', [ForgotPasswordController::class, 'handleForgotPassword']);
    Route::get('reset-password/{token}', [ResetPassword::class, 'resetPassword']);
    Route::post('reset-password', [ResetPassword::class, 'handleResetPassword']);
});


/*
 | -----------------------------------------------------------------------------
 | Dashboard Routes
 | -----------------------------------------------------------------------------
 | 
 | This route group uses the "" prefix and contains all of the
 | routes needed for dashboard -> main page routing.
 */
Route::group([
    'namespace' => 'Dashboard',
    'as' => 'dashboard.',
], function () {
    Route::get('', [MainController::class, 'index']);
});