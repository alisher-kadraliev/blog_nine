<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

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
Route::get('/test', function (){
    return view('admin.category.test');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin'], function (){
    Route::get('/home',[\App\Http\Controllers\MainController::class,'index'])->name('admin.home');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/',  [CategoryController::class,'index'])->name('admin.category.index');
        Route::get('/create',  [CategoryController::class,'create'])->name('admin.category.create');
        Route::post('/',  [CategoryController::class,'store'])->name('admin.category.store');
    });
});
Route::get('/front', function (){
   return view('front.front');
});

