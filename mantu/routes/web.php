<?php


use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');

});

route::get('/task', [TaskController::class,'index']);
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');