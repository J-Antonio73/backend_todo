<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Support\Facades\Route;

Route::controller(TaskController::class)->group(function () {
    Route::get('/tasks', 'index');
    Route::get('/tasks/completed', 'showCompleted');
    Route::post('/task', 'store');
    Route::get('/task/{id}', 'show');
    Route::put('/task/{id}', 'update');
    Route::patch('/task/{id}', 'updateStatus');
    Route::delete('/task/{id}', 'destroy');
});
