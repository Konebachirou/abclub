<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\abclub\HomeController;
use App\Http\Controllers\abclub\AboutController;
use App\Http\Controllers\abclub\CommentController;
use App\Http\Controllers\abclub\ContactController;
use App\Http\Controllers\abclub\EventController;
use App\Http\Controllers\abclub\NewsActionsController;

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

Route::get('/', [HomeController::class, 'Home'])->name('home_link');


Route::controller(NewsActionsController::class)->group(function () {
    Route::get('/news', 'indexNews')->name('news_link');
    Route::get('/nos actions', 'indexActions')->name('action_link');
    Route::get('/details/{title}', 'details')->name('news_details_link');
});


Route::controller(EventController::class)->group(function () {
    Route::get('/events', 'Events')->name('event_link');
    Route::get('/events-details/{title}', 'EventsDatails')->name('event_details_link');
});

Route::post('/comments/store', [CommentController::class, 'store'])->name('comments-store');
Route::get('/l\'association', [AboutController::class, 'about'])->name('about_link');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact_link');
    Route::post('/contact/send', 'sendContact')->name('contact-send');
    Route::post('/news-letters', 'newsLetters')->name('news-letters');
});



Route::get('/login', [AppController::class, 'Login'])->name('login_link');
Route::get('/register', [AppController::class, 'Register'])->name('register_link');
Route::get('/forgot-Password', [AppController::class, 'ForgotPassword'])->name('forgotPassword_link');



//Dashboard profil & setting
Route::get('/dashboard', [AppController::class, 'Dashboard'])->name('dashboard_link');
Route::get('/profil', [AppController::class, 'Profil'])->name('profil_link');
Route::get('/my event', [AppController::class, 'MyEvents'])->name('myEvent_link');
Route::get('/setting', [AppController::class, 'Setting'])->name('setting_link');
