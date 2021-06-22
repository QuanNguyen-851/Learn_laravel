<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
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
// Route::get('/class/classroom', [ClassController::class, 'classroom']);
// Route::post('/class/stored', [ClassController::class, 'stored'])->name('stored');

Route::resource('class', ClassController::class);
Route::get('/class/output', [ClassController::class, 'output'])->name('output');




//dashboad
Route::get('/', function () {
    return view('dashboard');
});
Route::get('buttons', [ComponentsController::class, 'buttons']);
Route::get('grid', [ComponentsController::class, 'grid']);
// excel
// Route::get('importExportView', [ExportController::class, 'importExportView']);
// Route::get('export', [ExportController::class, 'export'])->name('export');
// Route::post('import', [ExportController::class, 'import'])->name('import');
/////import;
Route::get('import-form', [EmployeeController::class, 'importForm']); // gọi đến forrm thêm 
Route::post('import', [EmployeeController::class, 'import'])->name('employee.import'); // gọi đến hàm sửa lý
////export
Route::get('/add-employee', [EmployeeController::class, 'addEmployee']);
Route::get('/export-Excel', [EmployeeController::class, 'exportIntoExcel']);
Route::get('/export-CSV', [EmployeeController::class, 'exportIntoCSV']);
