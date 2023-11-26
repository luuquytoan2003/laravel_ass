<?php

use App\Http\Controllers\admin\C_Auth;
use App\Http\Controllers\admin\C_Dasboard;
use App\Http\Controllers\admin\C_User;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

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
    return view('admin.auth.login');
});

Route::get('dasboard', [C_Dasboard::class,'index'])->name('dasboard')->middleware(AuthMiddleware::class);

Route::get('user/index', [C_User::class, 'index'])->name('user.index')->middleware(AuthMiddleware::class);
Route::get('user/create', [C_User::class, 'create'])->name('user.create')->middleware(AuthMiddleware::class);



Route::get('admin', [C_Auth::class, 'index'] )->name('auth.admin');
Route::post('login', [C_Auth::class, 'login'])->name('auth.login');
Route::get('logout', [C_Auth::class,'logout'])->name('auth.logout');
