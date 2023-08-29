<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks/index', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::post('/tasks/', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'delete'])->name('tasks.delete');

Route::resource('/users', UserController::class);
