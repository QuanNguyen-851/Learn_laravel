<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return View('Welcome');
});
Route::get('/sinhvien', [MenuController::class, 'menu']);
Route::get('/sum/{a}+{b}', [StudentController::class, 'sum']);
Route::get('/bao/{id}/{title}', [StudentController::class, 'bao']);
Route::get('/trang-chu', [MenuController::class, 'trangChu']);
Route::get('/trang-ca-nhan', [MenuController::class, 'trangCaNhan']);
Route::get('/class/classroom', [ClassController::class, 'classroom']);
Route::post('/class/stored', [ClassController::class, 'stored'])->name('stored');
