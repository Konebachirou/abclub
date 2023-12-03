<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\abclub\HomeController;
use App\Http\Controllers\abclub\AboutController;
use App\Http\Controllers\abclub\AneController;
use App\Http\Controllers\abclub\CommentController;
use App\Http\Controllers\abclub\ContactController;
use App\Http\Controllers\abclub\EventController;
use App\Http\Controllers\abclub\NewsActionsController;
use App\Http\Controllers\Administrator\AuthentificationController;
use App\Http\Controllers\Administrator\DashboardController;

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

Route::controller(AuthentificationController::class)->group(function () {
    Route::get('/signin', 'signin')->name('login_link');
    Route::get('/logout', 'logout')->name('logout_link');
    Route::post('/auhentification', 'authenticate')->name('authentification');
});

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

Route::get('/amid/anp', [HomeController::class, 'anp'])->name('anp_link');

Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs_link');
Route::get('/jobs/detail', [HomeController::class, 'jobsDetail'])->name('jobs_detail_link');
Route::get('/forgot-Password', [DashboardController::class, 'ForgotPassword'])->name('forgotPassword_link');

Route::controller(AneController::class)->group(function () {
    Route::get('/amid/ane', 'ane')->name('ane_link');
    Route::get('/postuler', 'postuler')->name('postuler_link');
    Route::post('/postuler/store', 'store')->name('postuler-store');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact_link');
    Route::post('/contact/send', 'sendContact')->name('contact-send');
    Route::post('/news-letters', 'newsLetters')->name('news-letters');
});


Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        //Dashboard profil & setting
        Route::get('/dashboard', 'Dashboard')->name('dashboard_link');
        Route::get('/profil', 'Profil')->name('profil_link');
        Route::get('/my event', 'MyEvents')->name('myEvent_link');
        Route::get('/setting', 'Setting')->name('setting_link');
    });
});