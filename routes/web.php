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

Route::group(['prefix' => 'index'], function (){
    Route::get('', [\App\Http\Controllers\EmployeesController::class, 'index'])->name('index');
    Route::get('create/', [\App\Http\Controllers\EmployeesController::class, 'create'])->name('create');
    Route::post('store/', [\App\Http\Controllers\EmployeesController::class, 'store'])->name('store');
    Route::get('edit/{id}', [\App\Http\Controllers\EmployeesController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [\App\Http\Controllers\EmployeesController::class, 'delete'])->name('delete');
    Route::put('update/{id}', [\App\Http\Controllers\EmployeesController::class, 'update'])->name('update');
});
