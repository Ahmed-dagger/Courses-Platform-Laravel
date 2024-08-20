<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;


Route::group(['as' => ''] , function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/authnit', [AuthController::class, 'auhtnitcate'])->name('authnit');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/register', [AuthController::class, 'register']);
    
    Route::post('/post', [AuthController::class, 'store'])->name('post');
});


Route::middleware('auth')->group(function () {

    Route::get('/UserProfile', [ProfileController::class, 'User'])->name('UserProfile');

    Route::get('/UserProfile/{id}', [ProfileController::class, 'UserConfigure'])->name('UserConfigure.show');

    Route::put('/UserProfile/{id}/update', [ProfileController::class, 'upadate'])->name('UserConfigure.update');

    Route::get('/email/verify', [AuthController::class, 'EmailVerifyView'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'EmailVerify'])
        ->middleware(['auth', 'signed'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [AuthController::class, 'sendVerificationEmail'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');


        Route::post('/cart/{course}', [CartController::class, 'add'])->name('cart.add');
        Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
        Route::delete('/cart/{cart}', [CartController::class, 'remove'])->name('cart.remove');
});

