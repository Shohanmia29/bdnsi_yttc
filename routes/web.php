<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index'])->name('welcome');
Route::get('/all_course', [HomeController::class,'all_course'])->name('all_course');
Route::get('/page', [HomeController::class,'dymamicPage'])->name('dynamicPage');

Route::match(['get','post'],'/contact-us', [HomeController::class,'contactUs'])->name('contactUs');

Route::resource('center-request', \App\Http\Controllers\CenterRequestController::class)->only(['create','store']);
Route::get('result', \App\Http\Controllers\ResultController::class)->name('result');
Route::Post('result', \App\Http\Controllers\ResultController::class);

Route::resource('student', \App\Http\Controllers\StudentController::class);
Route::resource('student-submission', \App\Http\Controllers\StudentSubmissionController::class)->only(['create','store']);

Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->middleware(['auth'])->name('dashboard');

Route::get('center-student-result', \App\Http\Controllers\CenterTotalResultController::class)->name('centerStudentResult');

Route::get('verified-institute', [\App\Http\Controllers\FrontendController::class,'verifyInstitute'])->name('verifiedInstitute');
Route::get('success-student', [\App\Http\Controllers\FrontendController::class,'successStudent'])->name('successStudent');
Route::get('gallery', [\App\Http\Controllers\FrontendController::class,'gallery'])->name('gallery');

Route::resource('password-update', \App\Http\Controllers\PasswordUpdateController::class)
    ->only(['create','store']);
Route::resource('profile-update', \App\Http\Controllers\ProfileUpdateController::class)
    ->only(['create','store']);


Route::middleware('auth')->group(function(){
    Route::resource('password-update', \App\Http\Controllers\PasswordUpdateController::class)
        ->only(['create','store']);
    Route::resource('profile-update', \App\Http\Controllers\ProfileUpdateController::class)
        ->only(['create','store']);
});

Route::get('portal/{user}', \App\Http\Controllers\PortalController::class)->name('portal');


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
