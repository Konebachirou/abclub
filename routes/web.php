<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\abclub\AboutController;
use App\Http\Controllers\abclub\ContactController;

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

Route::get('/', [AppController::class, 'Home'])->name('home_link');
Route::get('/news-details', [AppController::class, 'NewsDatails'])->name('news_details_link');
Route::get('/news', [AppController::class, 'News'])->name('news_link');
Route::get('/events-details', [AppController::class, 'EventsDatails'])->name('event_details_link');
Route::get('/events', [AppController::class, 'Events'])->name('event_link');
Route::get('/nos actions', [AppController::class, 'Action'])->name('action_link');
Route::get('/login', [AppController::class, 'Login'])->name('login_link');
Route::get('/register', [AppController::class, 'Register'])->name('register_link');
Route::get('/forgot-Password', [AppController::class, 'ForgotPassword'])->name('forgotPassword_link');
Route::get('/profil', [AppController::class, 'Profil'])->name('profil_link');


Route::get('/l\'association', [AboutController::class, 'about'])->name('about_link');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact_link');
    Route::post('/contact/send', 'sendContact')->name('contact-send');
    Route::post('/news-letters', 'newsLetters')->name('news-letters');
});
