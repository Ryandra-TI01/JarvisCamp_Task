<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
// jalaman dashboard admin
Route::get('/', function () {
    return view('dashboard.index');
});
// halaman task
Route::get('tasks',[TaskController::class,'index'])->name('tasks');
Route::get('detail/{id}',[TaskController::class,'detail']);
// halaman crud task
Route::get('/tasks/list',[TaskController::class,'list'])->name('tasks.list');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks/store',[TaskController::class,'store'])->name('tasks.store');
Route::get('/tasks/edit/{id}',[TaskController::class,'edit'])->name('tasks.edit');
Route::put('/tasks/update/{id}',[TaskController::class,'update'])->name('tasks.update');
Route::delete('/tasks/delete/{id}',[TaskController::class,'delete'])->name('tasks.delete');

// halaman projects
Route::get('projects',[ProjectsController::class,'index'])->name('projects');
Route::get('detail/{id}',[ProjectsController::class,'detail']);
// halaman crud projects
Route::get('/projects/list',[ProjectsController::class,'list'])->name('projects.list');
Route::get('/projects/create',[ProjectsController::class,'create'])->name('projects.create');
Route::post('/projects/store',[ProjectsController::class,'store'])->name('projects.store');
Route::get('/projects/edit/{id}',[ProjectsController::class,'edit'])->name('projects.edit');
Route::put('/projects/update/{id}',[ProjectsController::class,'update'])->name('projects.update');
Route::delete('/projects/delete/{id}',[ProjectsController::class,'delete'])->name('projects.delete');



// halaman crud categories
Route::get('/categories/list',[CategoriesController::class,'list'])->name('categories.list');
Route::get('/categories/create',[CategoriesController::class,'create'])->name('categories.create');
Route::post('/categories/store',[CategoriesController::class,'store'])->name('categories.store');
Route::get('/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::put('/categories/update/{id}',[CategoriesController::class,'update'])->name('categories.update');
Route::delete('/categories/delete/{id}',[CategoriesController::class,'delete'])->name('categories.delete');


// halaman crud status
Route::get('/status/list',[StatusController::class,'list'])->name('status.list');
Route::get('/status/create',[StatusController::class,'create'])->name('status.create');
Route::post('/status/store',[StatusController::class,'store'])->name('status.store');
Route::get('/status/edit/{id}',[StatusController::class,'edit'])->name('status.edit');
Route::put('/status/update/{id}',[StatusController::class,'update'])->name('status.update');
Route::delete('/status/delete/{id}',[StatusController::class,'delete'])->name('status.delete');