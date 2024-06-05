<?php

use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\FriendRequestController;
use App\Http\Controllers\SuggestionController;
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


Route::group(['middleware' => 'auth'], function () {

    Route::resource('/suggestions', SuggestionController::class)->only(['index', 'store']);
    Route::resource('/connections', ConnectionController::class)->only(['index', 'destroy']);
    Route::get('/connections/common', [ConnectionController::class, 'getCommonConnections']);

    // Friend Request Routes
    Route::get('/requests', [FriendRequestController::class, 'getRequests']);
    Route::get('/send-request/{suggestionId}', [FriendRequestController::class, 'storeRequest']);
    Route::get('/withdraw-request/{friendRequest}', [FriendRequestController::class, 'withdrawRequest']);
    Route::get('/accept-request/{friendRequest}', [FriendRequestController::class, 'acceptRequest']);
});
