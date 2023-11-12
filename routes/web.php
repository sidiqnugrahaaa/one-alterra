<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/sign-in', 'signIn')->name('login');
    Route::get('/sign-out', 'signOut')->name('logout');
    Route::post('/sign-in', 'authentication')->name('sign-in-post');
    Route::get('/sign-up', 'signUp')->name('sign-up');
    Route::post('/sign-up', 'registration')->name('sign-up-post');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile')->middleware('auth');
    Route::get('/profile/report-time', 'reportTime')->name('profile.report.time')->middleware('auth');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
    Route::get('/detail-course', 'detailCourse')->name('detail.course');
    Route::get('/payment-course', 'paymentCourse')->name('payment.course')->middleware('auth');
    Route::post('/payment-course', 'enrollCourse')->name('payment.course.post')->middleware('auth');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/course/{id}/next', 'next')->name('course.next')->middleware('auth');
    Route::get('/course/{id}/prev', 'prev')->name('course.prev')->middleware('auth');
    Route::post('/course/test/submit', 'submitTest')->name('course.test.submit')->middleware('auth');
    Route::get('/course/{id}/{detail}', 'index')->name('course.show')->middleware('auth');
});
