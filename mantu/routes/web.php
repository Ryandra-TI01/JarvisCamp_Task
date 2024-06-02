<?php

use App\Http\Controllers\TaskController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('tasks',[TaskController::class,'index']);
Route::get('detail/{id}',[TaskController::class,'detail']);

Route::get('/tasks/list',[TaskController::class,'list']);
Route::get('/tasks/create',[TaskController::class,'create']);
Route::post('/tasks/store',[TaskController::class,'store']);
Route::get('/tasks/edit/{id}',[TaskController::class,'edit']);
Route::put('/tasks/update/{id}',[TaskController::class,'update']);