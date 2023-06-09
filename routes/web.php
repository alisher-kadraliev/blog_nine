<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LikePostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Personal\LikeController;
use App\Http\Controllers\Personal\CommentController;
use App\Http\Controllers\Personal\PersonalController;
use App\Http\Controllers\SingPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|making the operation
*/

Route::get('/a', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::group(['prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [PersonalController::class, 'index'])->name('personal.home');

    Route::group(['prefix' => 'like'], function () {
        Route::get('/', [LikeController::class, 'index'])->name('personal.like.index');
//        Route::delete('/{post}', [LikeController::class, 'delete'])->name('personal.like.delete');
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', [CommentController::class, 'index'])->name('personal.comment.index');
        Route::get('/{comment}/edit', [CommentController::class, 'edit'])->name('personal.comment.edit');
        Route::patch('/{comment}', [CommentController::class, 'update'])->name('personal.comment.update');
        Route::delete('/{comment}', [CommentController::class, 'delete'])->name('personal.comment.delete');
    });
    Route::group(['prefix' => '{post}/like'], function () {
        Route::post('/', [LikePostController::class, 'store'])->name('personal.like.store');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::get('/home', [MainController::class, 'index'])->name('admin.home');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
        Route::get('/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
        Route::patch('/{tag}', [TagController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}', [TagController::class, 'destroy'])->name('admin.tag.destroy');
    });
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('/', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}', [PostController::class, 'show'])->name('admin.post.show');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/{post}', [PostController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('admin.post.destroy');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
});
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [SingPostController::class, 'index'])->name('post.index');
    Route::get('/{post}', [SingPostController::class, 'show'])->name('post.show');

    Route::group(['prefix' => '{post}/comment'], function () {
        Route::post('/', [CommentPostController::class, 'store'])->name('post.comment.store');
    });
});

