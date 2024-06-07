<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::group(['prefix'=> ''], function () {
    Route::get('/', [HomeController::class,'index'])->name('home.index'); 
}); 

Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class,'checklogin']);

Route::get('/admin/register', [AdminController::class,'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class,'checkrgister']);

// Route::get('/admin/logout', [AdminController::class,'logout'])->name('admin.logout');

Route::group(['prefix'=> 'admin','middleware'=> ['auth']], function () {
    Route::get('/', [AdminController::class,'index'])->name('admin.index'); 
    Route::post('/logout', [AdminController::class,'logout'])->name('admin.logout');

}); 
