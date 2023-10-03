<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\UserController;
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::post('/show', [UserController::class, 'show']);
    Route::post('/edit', [UserController::class, 'edit']);
    Route::post('/update', [UserController::class, 'update']);    
    Route::post('/delete', [UserController::class, 'destroy']);
    Route::get('/get_pengesah', [UserController::class, 'get_pengesah']);   
   
});


use App\Http\Controllers\TaskController;
Route::resource('task', TaskController::class);

use App\Http\Controllers\PengesahController;
Route::resource('pengesah', PengesahController::class);