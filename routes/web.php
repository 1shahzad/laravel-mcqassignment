<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\PasswordController;

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
    return redirect('/home');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
Route::post('/quiz/ques/store', [App\Http\Controllers\Customer\HomeController::class, 'quiz_ques_store'])->name('quiz.ques.store');
Route::get('/register', [App\Http\Controllers\Customer\HomeController::class, 'register_form'])->name('register.form');
Route::post('/register/user', [App\Http\Controllers\Customer\HomeController::class, 'register_user'])->name('register.user');

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('/login',[LoginController::class, 'login'])->name('admin.login');
        Route::post('/adminlogin',[LoginController::class, 'authenticate'])->name('admin.auth');
        Route::get('/reset-password', [PasswordController::class, 'forgot_password']);
        Route::post('/forgot-password-process', [PasswordController::class, 'forgot_password_process'])->name('admin.reset_mail');
        Route::get('/forgot-password-process-change/{id}', [PasswordController::class, 'forgot_password_process_change']);
        Route::post('/forgot-password-update', [PasswordController::class, 'forgot_password_update'])->name('admin.password_update');
    });

    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::resource('/user', UserController::class);
        Route::resource('/quiz', QuizController::class);
    });
});


