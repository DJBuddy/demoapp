<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


        
Route::get('userlist',[UserController::class,'manageuser']);
Route::get('userdelete/{id}',[UserController::class,'userdelete']);
Route::post('useredit/updateuser/{id}',[UserController::class,'updateuser'])->name('updateuser/{id}');
Route::get('useredit/{id}',[UserController::class,'useredit']); 
Route::post('userregistration',[UserController::class,'userregistration']);
Route::get('registration',[UserController::class,'registration']);
Route::post('adminlogin',[UserController::class,'adminlogin']);
Route::get('login',[UserController::class,'login']);
Route::post('logout',[UserController::class,'logout'])->name('logout');


