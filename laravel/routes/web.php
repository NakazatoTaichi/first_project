<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleController;
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

Route::get('/schedules', [ScheduleController::class,'index'])->name('schedules.index');

Route::get('/schedules/create', [ScheduleController::class,'create'])->name('schedule.create');
Route::post('/schedules/store', [ScheduleController::class,'store'])->name('schedule.store');
// create画面のnameが単数形になっている
Route::get('/schedules/edit/{schedule}', [ScheduleController::class,'edit'])->name('schedule.edit');
Route::put('/schedule/edit/{schedule}', [ScheduleController::class,'update'])->name('schedule.update');

Route::get('/schedules/show/{schedule}', [ScheduleController::class,'show'])->name('schedule.show');