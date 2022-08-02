<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chat', [App\Http\Controllers\LiveChatController::class,'index'])->name('chat');
Route::get('/message', [App\Http\Controllers\MessageController::class,'index'])->name('message');
Route::get('/message', [App\Http\Controllers\MessageController::class,'store'])->name('chat');

