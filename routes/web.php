<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

Route::get('/interview', [App\Http\Controllers\InterviewController::class, 'index'])->name('interview');
Route::get('/msq', [App\Http\Controllers\InterviewController::class, 'msq'])->name('interview.msq');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/addtask', [App\Http\Controllers\AddtaskController::class, 'index'])->name('addTask');
Route::post('/addtask', [App\Http\Controllers\AddtaskController::class, 'store'])->name('storeTask');

Route::post('/msq', [App\Http\Controllers\InterviewController::class, 'store'])->name('storeMsq');


Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::post('/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('questions.add');


Route::get('/create', [App\Http\Controllers\CreateController::class, 'index'])->name('create');
Route::post('/create', [App\Http\Controllers\CreateController::class, 'store'])->name('store');

Route::get('/show/{article}', [App\Http\Controllers\ShowController::class, 'index'])->name('show');

Route::post('/show/{article}', [App\Http\Controllers\CommentController::class, 'store'])->name('comment');
