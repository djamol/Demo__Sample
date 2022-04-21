<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ImportController;

use App\Http\Controllers\API\IPController;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::resource('posts', PostController::class);
});

Route::middleware('auth:api')->group( function () {
    Route::resource('router', IPController::class);
});


Route::post('import', [ImportController::class, 'import']);
Route::post('all', [IPController::class, 'getdata']);

//Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
//});

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
