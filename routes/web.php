<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientRegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

    Route::redirect('/', 'login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::get('/index', [IndexController::class, 'index'])->name('registry.index');
    Route::get('/register', [PatientRegisterController::class, 'create'])->name('register.create');
    Route::post('/register', [PatientRegisterController::class, 'store'])->name('register.store');
    Route::get('/patients/{id}/edit', [PatientRegisterController::class, 'edit'])->name('patients.edit');
    Route::put('/patients/{id}', [PatientRegisterController::class, 'update'])->name('patients.update');
    Route::delete('/record/{id}', [IndexController::class, 'destroy'])->name('record.destroy');
    Route::delete('/logout', [authController::class, 'logout'])->name('logout');
