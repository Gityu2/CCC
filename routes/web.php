<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\CategoryController;


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

Auth::routes();

Route::get('/', [NewsController::class, 'index'])->name('news.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/{news_id}',[NewsController::class, 'show'])->name('news.show');

// tentative route to filtered page for user
Route::get('/search/category',[NewsController::class, 'filter'])->name('news.filter');

Route::get('/category/{category_id}',[CategoryController::class, 'show'])->name('news.category');

Route::group(['middleware' => 'auth'],function(){

  Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    Route::get('dashboard', [AdminNewsController::class, 'showDashboard'])->name('show.dashboard');
    
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
      Route::get('create', [AdminNewsController::class, 'create'])->name('create');
      Route::post('store', [AdminNewsController::class, 'store'])->name('store');
      Route::get('edit/{news_id}', [AdminNewsController::class, 'edit'])->name('edit');
      Route::patch('{news_id}', [AdminNewsController::class, 'update'])->name('update');;
      Route::get('show', [AdminNewsController::class, 'show'])->name('show');

    });
    Route::group(['prefix' => 'comments', 'as' => 'comments.'], function () {
      Route::get('show', [AdminCommentController::class, 'show'])->name('show');

    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
      Route::get('show', [AdminUserController::class, 'show'])->name('show');
      Route::delete('destroy/{user_id}', [AdminUserController::class, 'destroy'])->name('destroy');
      
    });


    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
        Route::get('post', [ProfileController::class, 'update'])->name('post');
    });
  });
});

