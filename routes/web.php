<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('web.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Admin', [App\Http\Controllers\AdminController::class, 'index'])->name('Admin')->middleware('auth');
Route::resource('Posts', App\Http\Controllers\PostsController::class)->middleware('auth');
Route::get('deletePost/{id}',[App\Http\Controllers\PostsController::class, 'destroy'])->middleware('auth');

