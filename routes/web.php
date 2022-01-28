<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UsersController;

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
Route::view('profile', 'profile');
Route::view('/', 'adduser');

//Route::get("users",[Users::class,'indexfunc']);
Route::get('/', [UsersController::class, 'getdata']);
Route::post("insert",[UsersController::class,'insertdata']);
Route::get('delete/{id}', [UsersController::class, 'delete']);
Route::get('edit/{id}', [UsersController::class, 'edit']);
Route::post('update', [UsersController::class, 'update']);
//Route::post('user',[UsersController::class,'userLogin']);



