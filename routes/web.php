<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\ProductController;
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


Route::middleware('auth')->group(function () {
    Route::controller(MasterController::class)->group(function () {
        Route::get('/admin/home', 'home')->name('admin.home');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/product/list', 'product_list')->name('admin.product.list');
    });
});


Route::controller(AuthController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::post('/postLogin','postLogin')->name('login.post');
    Route::get('/register','indexer')->name('register');
    Route::post('/doRegister','doRegister')->name('doRegister');
    Route::get('/logout', 'logout')->name('logout');  

});





