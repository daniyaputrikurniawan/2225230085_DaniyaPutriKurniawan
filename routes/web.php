<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'index'])->name('siswa');

Route::get('/tambahsiswa', [EmployeeController::class, 'tambahsiswa']);
Route::post('/insertdata', [EmployeeController::class, 'insertdata']);

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata']);
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata']);

Route::get('/delete/{id}', [EmployeeController::class, 'delete']);
