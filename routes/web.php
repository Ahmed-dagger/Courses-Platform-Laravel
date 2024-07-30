<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAuthFormController;
use Illuminate\Support\Facades\Mail;
use App\Http\Middleware\userVerified;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




Route::get('/', [landingController::class, 'Landing'])->name('home');

Route::get('/courses', [CoursesController::class, 'Courses'])->name('courses');

Route::get('/courses/{id}', [CoursesController::class, 'Coursepage'])->name('coursePage');

Route::get('/About', [AboutController::class, 'About'])->name('About');

Route::get('/Contact', [ContactController::class, 'Contact'])->name('Contact');

Route::get('/Check', [AuthController::class,'CheckUser'])->name('Check');

Route::get('/register', [AuthController::class, 'register']);

Route::post('/post', [AuthController::class, 'store'])->name('post');

Route::post('/Ownerpost', [AuthController::class, 'Ownerstore'])->name('Ownerpost');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/loginAcademy', [AuthController::class,'LoginAcademy'])->name('loginAcademy');

Route::get('/registerAcademy', [AuthController::class,'registerAcademy'])->name('registerAcademy');

Route::post('/authnit', [AuthController::class, 'auhtnitcate'])->name('authnit');

Route::post('/Academyauthnit', [AuthController::class, 'Academyauhtnitcate'])->name('Academyauthnit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/Academylogout', [AuthController::class, 'Academylogout'])->name('Academylogout');

Route::get('/Profile', [ProfileController::class, 'Profile'])->name('AcademyProfile');

Route::get('/UserProfile', [ProfileController::class,'User'])->name('UserProfile');

Route::get('/AddingCourses', [CoursesController::class, 'AddingCourses'])->name('AddingCourses');

Route::post('/CourseAdder', [CoursesController::class, 'Add'])->name('CourseAdder');

Route::get('/Configure', [ProfileController::class, 'configureProfile'])->name('Configure');

Route::put('/Configure/udpate', [ProfileController::class, 'updateinfo'])->name('updateinfo');

Route::get('/register/FormAuth', [AuthController::class, 'FormAuthUSer'])->name('FormAuth')->middleware('Firstlogin');

Route::post('/register/FormAuth/submitted', [UserAuthFormController::class,'FormStore'])->name('userFormSubmit');

Route::get('/email/verify', [AuthController::class, 'EmailVerifyView'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'EmailVerify'] )->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', [AuthController::class, 'sendVerificationEmail'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware('auth:owner')->group(function () {

    Route::post('/Academylogout', [AuthController::class, 'Academylogout'])->name('Academylogout');
    
});


Route::get('/send-test-email', function () {
    try {
        Mail::raw('This is a test email', function ($message) {
            $message->to('ahdbo124@gmail.com')
                    ->subject('Test Email');
        });

        return 'Test email sent!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});






