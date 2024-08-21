<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAuthFormController;
use App\Http\Controllers\CartController; 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Middleware\userVerified;
use Illuminate\Routing\RouteGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



Route::get('/', [landingController::class, 'Landing'])->name('home');

Route::get('/courses', [CoursesController::class, 'Courses'])->name('courses');

Route::get('/courses/{id}', [CoursesController::class, 'Coursepage'])->name('coursePage');

Route::get('/About', [AboutController::class, 'About'])->name('About');

Route::get('/Contact', [ContactController::class, 'Contact'])->name('Contact');

Route::get('/Check', [AuthController::class,'CheckUser'])->name('Check');

Route::post('/Ownerpost', [AuthController::class, 'Ownerstore'])->name('Ownerpost');

Route::get('/loginAcademy', [AuthController::class,'LoginAcademy'])->name('loginAcademy');

Route::get('/registerAcademy', [AuthController::class,'registerAcademy'])->name('registerAcademy');

Route::post('/Academyauthnit', [AuthController::class, 'Academyauhtnitcate'])->name('Academyauthnit');

Route::post('/Academylogout', [AuthController::class, 'Academylogout'])->name('Academylogout');

Route::get('/Profile', [ProfileController::class, 'Profile'])->name('AcademyProfile')->middleware('Owner');

Route::get('/AddingCourses', [CoursesController::class, 'AddingCourses'])->name('AddingCourses');

Route::post('/CourseAdder', [CoursesController::class, 'Add'])->name('CourseAdder');

Route::get('/Configure', [ProfileController::class, 'configureProfile'])->name('Configure');

Route::put('/Configure/udpate', [ProfileController::class, 'updateinfo'])->name('updateinfo');

Route::get('/register/FormAuth', [AuthController::class, 'FormAuthUSer'])->name('FormAuth');

Route::post('/register/FormAuth/submitted', [UserAuthFormController::class,'FormStore'])->name('userFormSubmit');




Route::middleware('auth:owner')->group(function () {

    Route::post('/Academylogout', [AuthController::class, 'Academylogout'])->name('Academylogout');
    
});






