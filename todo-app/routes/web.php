<?php
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TasksController::class, 'info']);
Route::get('/tasks/index', [TasksController::class, 'index']);

Route::get('/tasks/create', [TasksController::class, 'create']);
Route::post('/tasks', [TasksController::class, 'store']);

Route::patch('/tasks/{id}', [TasksController::class, 'update'] );
Route::delete('/tasks/{id}', [TasksController::class, 'delete'] );





// Заменить домашнюю страницу 
// Создать задачу - показать задачу - задача готова и удалить задачу

