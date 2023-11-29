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

// user
Route::prefix('user')->group(function () {
    Route::get('index', [C_User::class, 'index'])->name('user.index')->middleware(AuthMiddleware::class);
    Route::get('create', [C_User::class, 'create'])->name('user.create')->middleware(AuthMiddleware::class);
    Route::post('store',[C_User::class,'store'])->name('user.store')->middleware(AuthMiddleware::class);
    Route::get('edit/{id}', [C_User::class,'edit'])->name('user.edit')->middleware(AuthMiddleware::class);//hiển thị form sửa
    Route::post('update/{id}', [C_User::class, 'update'])->name('user.update')->middleware(AuthMiddleware::class);// thực hiện sửa
    Route::get('delete/{id}', [C_User::class,'destroy'])->name('user.delete')->middleware(AuthMiddleware::class);

});




Route::get('admin', [C_Auth::class, 'index'] )->name('auth.admin');
Route::post('login', [C_Auth::class, 'login'])->name('auth.login');
Route::get('logout', [C_Auth::class,'logout'])->name('auth.logout');
