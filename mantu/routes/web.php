<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('tasks',[TaskController::class,'index']);
Route::get('detail/{id}',[TaskController::class,'detail']);