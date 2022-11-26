<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('/about/{name}/{lname}', [BaseController::class, 'about']);
Route::get('user-info',[BaseController::class, 'userInfo']);
Route::post('user-info',[BaseController::class, 'userInfoCreate']);
Route::get('register',[RegisterController::class, 'index']);
Route::post('register',[RegisterController::class, 'store']);
Route::delete('register/{id}',[RegisterController::class, 'destroy']);
Route::get('register/{id}/edit',[RegisterController::class, 'edit']);
Route::put('register/{id}',[RegisterController::class,'update']);
Auth::routes();
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
Route::middleware(['auth', 'user-access:Faculty'])->group(function () {
  
    Route::get('/Faculty/home', [HomeController::class, 'FacultyHome'])->name('Faculty.home');
});
 