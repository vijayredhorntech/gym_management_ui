<?php

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

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');
Route::get('/users', function () {
    return view('admin.users');
})->name('users');
Route::get('/trainers', function () {
    return view('admin.trainers');
})->name('trainers');
Route::get('/payments', function () {
    return view('admin.trainers');
})->name('payments');
Route::get('/gallery', function () {
    return view('admin.gallery');
})->name('gallery');
Route::get('/exercises', function () {
    return view('admin.exercises');
})->name('exercises');
Route::get('/workouts', function () {
    return view('admin.workouts');
})->name('workouts');



Route::get('/logout', function () {
    return view('admin.layouts.layout');
})->name('logout');





Route::get('/trainerForm', function () {
    return view('admin.trainerForm');
})->name('trainerForm');

Route::get('/userForm', function () {
    return view('admin.userForm');
})->name('userForm');

Route::get('/galleyForm', function () {
    return view('admin.galleryForm');
})->name('galleyForm');

Route::get('/exerciseForm', function () {
    return view('admin.exerciseForm');
})->name('exerciseForm');

Route::get('/workoutForm', function () {
    return view('admin.workoutForm');
})->name('workoutForm');
