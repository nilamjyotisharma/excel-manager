<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelUploadController;



Route::get('/', function () {
    return view('home');
})->middleware('redirectIfAuthenticated')->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost']);
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost']);
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/excel/import', [ExcelUploadController::class, 'index'])->name('excel.index');
    Route::post('/excel/import', [ExcelUploadController::class, 'importExcelData'])->name('excel.index');
    Route::get('/excel/show', [ExcelUploadController::class, 'showExcel'])->name('excel.show');
    Route::delete('/excel/delete', [ExcelUploadController::class, 'deleteExcel'])->name('excel.delete');
});
