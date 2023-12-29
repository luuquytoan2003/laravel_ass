<?php

use App\Http\Controllers\admin\C_Auth;
use App\Http\Controllers\admin\C_Category;
use App\Http\Controllers\admin\C_Dasboard;
use App\Http\Controllers\admin\C_Option;
use App\Http\Controllers\admin\C_OptionValues;
use App\Http\Controllers\admin\C_Product;
use App\Http\Controllers\admin\C_User;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ShopController;
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
    return view('client.pages.home');
});

Route::get('dasboard', [C_Dasboard::class,'index'])->name('dasboard')->middleware(AuthMiddleware::class);

// user
Route::prefix('user')->group(function () {
    Route::get('', [C_User::class, 'index'])->name('user.index')->middleware(AuthMiddleware::class);
    Route::get('create', [C_User::class, 'create'])->name('user.create')->middleware(AuthMiddleware::class);
    Route::post('store',[C_User::class,'store'])->name('user.store')->middleware(AuthMiddleware::class);
    Route::get('edit/{id}', [C_User::class,'edit'])->name('user.edit')->middleware(AuthMiddleware::class);//hiển thị form sửa
    Route::post('update/{id}', [C_User::class, 'update'])->name('user.update')->middleware(AuthMiddleware::class);// thực hiện sửa
    Route::get('delete/{id}', [C_User::class,'destroy'])->name('user.delete')->middleware(AuthMiddleware::class);

});

//categories
Route::prefix('category')->group(function(){
    Route::get('', [C_Category::class, 'index'])->name('category.index')->middleware(AuthMiddleware::class);
    Route::post('store', [C_Category::class, 'store'])->name('category.store')->middleware(AuthMiddleware::class);
    Route::post('update/{id}', [C_Category::class, 'update'])->name('category.update')->middleware(AuthMiddleware::class);
    Route::get('delete/{id}', [C_Category::class, 'destroy'])->name('category.delete')->middleware(AuthMiddleware::class);
});

//option
Route::prefix('option')->group(function () {
    Route::get('', [C_Option::class, 'index'])->name('option.index')->middleware(AuthMiddleware::class);
    Route::post('store', [C_Option::class, 'store'])->name('option.store')->middleware(AuthMiddleware::class);
    Route::post('update/{id}', [C_Option::class, 'update'])->name('option.update')->middleware(AuthMiddleware::class);
    Route::get('delete/{id}', [C_Option::class, 'destroy'])->name('option.delete')->middleware(AuthMiddleware::class);
});

Route::prefix('option_values')->group(function () {
    Route::post('store', [C_OptionValues::class, 'store'])->name('optionValues.store')->middleware(AuthMiddleware::class);
    Route::post('update/{id}', [C_OptionValues::class, 'update'])->name('optionValues.update')->middleware(AuthMiddleware::class);
    Route::get('delete/{id}', [C_OptionValues::class, 'destroy'])->name('optionValues.delete')->middleware(AuthMiddleware::class);
});

//product
Route::prefix('product')->group(function () {
    Route::get('productList', [C_Product::class,'index'])->name('product.index')->middleware(AuthMiddleware::class);
    Route::get('productCreate', [C_Product::class, 'create'])->name('product.create')->middleware(AuthMiddleware::class);
    Route::post('store',[C_Product::class, 'store'])->name('product.store')->middleware(AuthMiddleware::class);
    Route::get('edit/{id}',[C_Product::class,'edit'])->name('product.edit')->middleware(AuthMiddleware::class);
    Route::post('update/{id}', [C_Product::class, 'update'])->name('product.update')->middleware(AuthMiddleware::class);
});

//attributes


/**CLIENT */
Route::get('home',[HomeController::class,'index'])->name('client.home');
Route::get('shop', [ShopController::class, 'index'])->name('client.shop');






Route::post('login', [C_Auth::class, 'login'])->name('auth.login');
Route::get('logout', [C_Auth::class,'logout'])->name('auth.logout');
Route::get('backend',[C_Auth::class,'index'])->name('auth.admin');
