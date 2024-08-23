<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/single', [HomeController::class, 'single'])->name('single');
Route::get('/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('/coursesdetails', [HomeController::class, 'coursesdetails'])->name('coursesdetails');

Route::post('/enroll', [HomeController::class, 'store'])->name('enroll');