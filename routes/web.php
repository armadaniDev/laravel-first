<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // DASHBOARD & ABOUT
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/about', [AboutController::class, 'index'])->name('about');

        // STUDENT, CLASSROOM, SUBJECTS, TEACHERS
        Route::get('/student', [StudentController::class, 'index'])->name('student.index');
        Route::post('/student', [StudentController::class, 'store'])->name('student.store');

        Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom.index');
        Route::post('/classroom', [ClassroomController::class, 'store'])->name('classroom.store');

        Route::get('/subjects', [SubjectsController::class, 'index'])->name('subjects.index');
        Route::post('/subjects', [SubjectsController::class, 'store'])->name('subjects.store');

        Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers.index');
        Route::post('/teachers', [TeachersController::class, 'store'])->name('teachers.store');
    });
