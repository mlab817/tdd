<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;

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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function($router) {
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('api.authenticate');
    Route::post('register', [AuthController::class, 'register'])->name('api.register');
    Route::get('me', [AuthController::class, 'me'])->name('api.me');
    Route::get('logout', [AuthController::class, 'logout'])->name('api.logout');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
