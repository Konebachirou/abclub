<?php

use App\Http\Controllers\AppController;
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


Route::get('/',[AppController::class,'Home'])->name('home_link');
Route::get('/l\'association',[AppController::class,'About'])->name('about_link');
Route::get('/contact',[AppController::class,'Contact'])->name('contact_link');
Route::get('/news',[AppController::class,'News'])->name('news_link');
Route::get('/events',[AppController::class,'Events'])->name('event_link');
Route::get('/nos actions',[AppController::class,'Action'])->name('action_link');
Route::get('/login',[AppController::class,'Login'])->name('login_link');
Route::get('/register',[AppController::class,'Register'])->name('register_link');
Route::get('/forgot-Password',[AppController::class,'ForgotPassword'])->name('forgotPassword_link');
