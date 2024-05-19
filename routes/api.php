<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ExecutorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['namespace' => 'Task', 'prefix' => 'task'], function(){
    Route::post('/', [TaskController::class, 'createTask']);
    Route::get('/', [TaskController::class, 'getStoreTasks']);
    Route::get('/{id}', [TaskController::class, 'getStoreTask']);
    Route::patch('/{id}', [TaskController::class, 'editTask']);
    Route::delete('/{id}', [TaskController::class, 'deleteTask']);
});

Route::group(['namespace' => 'Executor', 'prefix' => 'executor'], function(){
    Route::post('/', [ExecutorController::class, 'createExecutor']);
    Route::get('/', [ExecutorController::class, 'getStoreExecutors']);
    Route::get('/{id}', [ExecutorController::class, 'getStoreExecutor']);
    Route::patch('/{id}', [ExecutorController::class, 'editExecutor']);
    Route::delete('/{id}', [ExecutorController::class, 'deleteExecutor']);
});