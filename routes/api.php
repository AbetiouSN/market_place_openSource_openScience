<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Kernel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login',[AuthController::class,'login']);

Route::post('/register',[AuthController::class,'register']);

Route::post('/store_project',[ProjectController::class,'store_project']);

Route::post('/updateproject/{id}',[ProjectController::class,'update']);
Route::delete('/deleteproject/{id}', [ProjectController::class, 'delete']);
Route::get('/showproject/{id}', [ProjectController::class, 'show']);

Route::get('/projects', [ProjectController::class, 'show_all_project']);


Route::get('/recommendations/{userId}', 'App\Http\Controllers\RecommendationController@recommendProjects');

