<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\abclub\AmidController;
use App\Http\Controllers\abclub\HomeController;
use App\Http\Controllers\abclub\AboutController;
use App\Http\Controllers\abclub\EventController;
use App\Http\Controllers\abclub\CommentController;
use App\Http\Controllers\abclub\ContactController;
use App\Http\Controllers\abclub\Amid\AnpController;
use App\Http\Controllers\abclub\JobController;
use App\Http\Controllers\abclub\NewsActionsController;
use App\Http\Controllers\abclub\PodcastController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\AuthentificationController;

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
    Route::get('/register', 'register')->name('register_link');

    Route::post('/auhentification', 'authenticate')->name('authentification');
});
// Route::get('/register',[AppController::class,'Register'])->name('register_link');

Route::get('/',  [HomeController::class, 'Home'])->name('home_link');


Route::controller(NewsActionsController::class)->group(function () {
    Route::get('/news', 'indexNews')->name('news_link');
    Route::get('/nos actions', 'indexActions')->name('action_link');
    Route::get('/details/{title}', 'details')->name('news_details_link');
});


Route::controller(EventController::class)->group(function () {
    Route::get('/events', 'Events')->name('event_link');
    Route::get('/events-details/{title}', 'EventsDatails')->name('event_details_link');
});

Route::controller(PodcastController::class)->group(function () {
    Route::get('/podcast', 'podcast')->name('podcast_link');
});

Route::post('/comments/store', [CommentController::class, 'store'])->name('comments-store');
Route::get('/l\'association', [AboutController::class, 'about'])->name('about_link');

Route::get('/jobs', [JobController::class, 'jobs'])->name('jobs_link');

Route::controller(AmidController::class)->group(function () {
    Route::get('/amid/ane', 'ane')->name('ane_link');
    Route::get('/amid/anp', 'anp')->name('anp_link');
    Route::get('/amid/about', 'about')->name('about_amid_link');
    Route::get('/postuler', 'postuler')->name('postuler_link');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact_link');
    Route::post('/contact/send', 'sendContact')->name('contact-send');
    Route::post('/news-letters', 'newsLetters')->name('news-letters');
});


Route::get('/forgot-Password', [DashboardController::class, 'ForgotPassword'])->name('forgotPassword_link');



Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        //Dashboard profil & setting
        Route::get('/dashboard', 'Dashboard')->name('dashboard_link');
        Route::get('/profil', 'Profil')->name('profil_link');
        Route::get('/my event', 'MyEvents')->name('myEvent_link');
        Route::get('/my Jobs', 'MyJobs')->name('myjobs_link');
        Route::get('/setting', 'Setting')->name('setting_link');
        Route::post('/setting/edit-profile', 'editProfil')->name('edit_profile_link');
        Route::post('/setting/edit-password', 'editPassword')->name('edit_password_link');
    });

    Route::post('/postuler/store', [AmidController::class, 'store'])->name('postuler-store');

    Route::controller(JobController::class)->group(function () {
        Route::get('/jobs/detail/{slug}',  'jobsDetail')->name('jobs_detail_link');
        Route::post('/job/postuler',  'userJob')->name('user_job_link');
    });
    Route::post('/events/get-ticket', [EventController::class, 'userEvent'])->name('user_event_link');
});
