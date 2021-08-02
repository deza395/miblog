<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users',UserController::class)->only(['index','update','edit'])->middleware('can:admin.home')->names('admin.users');
Route::resource('categories',CategoryController::class)->middleware('can:admin.home')->names('admin.categories');
Route::resource('tags',TagController::class)->middleware('can:admin.home')->names('admin.tags');
Route::resource('posts', PostController::class)->middleware('can:admin.home')->names('admin.posts');


