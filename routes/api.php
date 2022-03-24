<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
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

Route::post('login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('comments', [CommentController::class, 'list']);
    Route::post('comments', [CommentController::class, 'create']);
    Route::get('comments/{id}', [CommentController::class, 'find']);
    Route::delete('comments/{id}', [CommentController::class, 'remove']);
    Route::patch('comments/{id}', [CommentController::class, 'update']);
    // Config
    Route::get('config', [ConfigController::class, 'current']);
    Route::patch('config', [ConfigController::class, 'update']);
    // Dishes
    Route::get('dishes', [DishController::class, 'list']);
    Route::post('dishes', [DishController::class, 'create']);
    Route::get('dishes/{id}', [DishController::class, 'find']);
    Route::patch('dishes/{id}', [DishController::class, 'update']);
    Route::delete('dishes/{id}', [DishController::class, 'remove']);
    // Event
    Route::get('events', [EventController::class, 'list']);
    Route::post('events', [EventController::class, 'create']);
    Route::get('events/{id}', [EventController::class, 'find']);
    Route::patch('events/{id}', [EventController::class, 'update']);
    Route::delete('events/{id}', [EventController::class, 'remove']);
    // Image
    Route::post('images', [ImageController::class, 'upload']);
});
