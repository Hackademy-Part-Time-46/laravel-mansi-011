<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/show/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/update/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/delete/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

//Route::resource('/', TaskController::class);
