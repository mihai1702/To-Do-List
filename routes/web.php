<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn()=> redirect('/tasks'));
Route::resource('tasks', TaskController::class)->only(['index','store','update', 'destroy']);
Route::post('tasks/{id}/complete', [TaskController::class, 'complete'])->name('tasks.complete');