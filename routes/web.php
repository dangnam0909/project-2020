<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HomeController;
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
Route::get('/list_staff_show', [StaffController::class, 'show'])->name('list_staff_show');
Route::get('/list_staff_index', [StaffController::class, 'index'])->name('list_staff_index');
Route::get('/list_staff_create', [StaffController::class, 'create'])->name('list_staff_create');
Route::post('/list_staff_store', [StaffController::class, 'store'])->name('list_staff_store');
Route::get('/list_staff_edit/{id}', [StaffController::class, 'edit'])->name('list_staff_edit');
Route::post('/list_staff_update', [StaffController::class, 'update'])->name('list_staff_update');
Route::get('/list_staff_delete/{id}', [StaffController::class, 'destroy'])->name('list_staff_delete');
Route::post('/list_staff_delete/{id}', [StaffController::class, 'destroy'])->name('list_staff_delete');

// cap nhat lai dl, lay get, post: gui du lieu di
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user_logout', [HomeController::class, 'logout']);

