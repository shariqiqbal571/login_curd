<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


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

Route::get('/', function () {
    return view('welcome');
});







Route::get('/login',[UserController::class,'login'])->name('login')->middleware('loggedInUser');
Route::post('/check-user',[UserController::class,'loginCheck'])->name('check.login')->middleware('loggedInUser');

Route::get('/user/logout',[UserController::class,'logout']);
Route::get('/user/dashboard',[UserController::class,'user_dashboard'])->name('user.dashboard')->middleware('user');




Route::get('/user',[UserController::class,'index'])->name('index');
Route::get('/user/add',[UserController::class,'create'])->name('create');
Route::post('/user/store',[UserController::class,'store'])->name('store');
Route::get('/user/view/{id}',[UserController::class,'show'])->name('show');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::put('/user/update/{id}',[UserController::class,'update'])->name('update');
Route::get('/user/delete/{id}',[UserController::class,'destroy'])->name('destroy');

