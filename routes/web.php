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

Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
Route::resource('password-update', \App\Http\Controllers\PasswordUpdateController::class)
    ->only(['create','store']);
Route::resource('profile-update', \App\Http\Controllers\ProfileUpdateController::class)
    ->only(['create','store']);
=======
Route::middleware('auth')->group(function(){
    Route::resource('password-update', \App\Http\Controllers\PasswordUpdateController::class)
        ->only(['create','store']);
    Route::resource('profile-update', \App\Http\Controllers\ProfileUpdateController::class)
        ->only(['create','store']);
    Route::resource('deposit', \App\Http\Controllers\DepositController::class)->only(['index','create','store']);
    Route::resource('transfer', \App\Http\Controllers\TransferController::class)->only(['index','create', 'store']);
    Route::get('wallet-log/{wallet}', \App\Http\Controllers\WalletLogController::class)->name('wallet-log.index');
});

Route::get('portal/{user}', \App\Http\Controllers\PortalController::class)->name('portal');


>>>>>>> 528c622 (Add portal to admin)

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
