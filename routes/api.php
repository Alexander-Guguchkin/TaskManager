<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['namespace' => 'Task', 'prefix' => 'task'], function(){
    Route::post('/', [TaskController::class, 'createTask']);
    Route::get('/', [TaskController::class, 'getStoreTasks']);
});