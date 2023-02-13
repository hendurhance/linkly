<?php

use App\Http\Controllers\Admin\Auth\LoginController;
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
    Route::get('forgot-password', [LoginController::class, 'forgotPassword']);
});
