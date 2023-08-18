<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/schedules', [ScheduleController::class,'index'])->name('schedules.index');
});

Route::get('/schedules/create', [ScheduleController::class,'create'])->name('schedule.create');
Route::post('/schedules/store', [ScheduleController::class,'store'])->name('schedule.store');
// create画面のnameが単数形になっている
Route::get('/schedules/edit/{schedule}', [ScheduleController::class,'edit'])->name('schedule.edit');
Route::put('/schedule/edit/{schedule}', [ScheduleController::class,'update'])->name('schedule.update');

Route::get('/schedules/show/{schedule}', [ScheduleController::class,'show'])->name('schedule.show');

Route::delete('/schedules/{schedule}', [ScheduleController::class,'destroy'])->name('schedule.destroy');


Route::get('/users', [UserController::class,'index'])->name('users.index');

Route::get('/users/create', [UserController::class,'create'])->name('user.create');
Route::post('/users/store', [UserController::class,'store'])->name('user.store');

Route::get('/users/edit/{id}', [UserController::class,'edit'])->name('user.edit');
Route::post('/users/edit/{id}', [UserController::class,'update'])->name('user.update');

Route::delete('/users/{id}', [UserController::class,'delete'])->name('user.delete');


Route::get('/posts', [PostController::class,'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
Route::post('/posts/store', [PostController::class,'store'])->name('post.store');

Route::get('/posts/show/{id}', [PostController::class,'show'])->name('post.show');

Route::delete('/posts/{post}/destroy', [PostController::class,'destroy'])->name('post.destroy');


Route::post('/posts/{post}/comments', [CommentController::class,'store'])->name('comment.store');

Route::delete('/comments/{comment}/destroy', [CommentController::class,'destroy'])->name('comment.destroy');


Route::get('/login', [LoginController::class,'show'])->name('login.show');
Route::post('/login', [LoginController::class,'login'])->name('login.store');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');