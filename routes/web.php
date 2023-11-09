<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainerController;

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

//Route::get('/admin', function () {
//    return view('admin.dashboard');
//})->name('admin');
//Route::get('/users', function () {
//    return view('admin.users');
//})->name('users');
//Route::get('/trainers', function () {
//    return view('admin.trainers');
//})->name('trainers');
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
Route::get('/servicePackages', function () {
    return view('admin.servicePackages');
})->name('servicePackages');



Route::get('/logout', function () {
    return view('admin.layouts.layout');
})->name('logout');





//Route::get('/trainerForm', function () {
//    return view('admin.trainerForm');
//})->name('trainerForm');

//Route::get('/userForm', function () {
//    return view('admin.userForm');
//})->name('userForm');

Route::get('/galleyForm', function () {
    return view('admin.galleryForm');
})->name('galleyForm');

Route::get('/exerciseForm', function () {
    return view('admin.exerciseForm');
})->name('exerciseForm');

Route::get('/workoutForm', function () {
    return view('admin.workoutForm');
})->name('workoutForm');

Route::get('/servicePackagesForm', function () {
    return view('admin.servicePackagesForm');
})->name('servicePackagesForm');













Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
//
Route::prefix('member')->name('member.')->group(function(){
    Route::get('/', [MemberController::class, 'index'])->name('index');
    Route::get('create', [MemberController::class, 'create'])->name('create');
    Route::post('store', [MemberController::class, 'store'])->name('store');
    Route::get('edit/{member}', [MemberController::class, 'edit'])->name('edit');
    Route::post('update/{member}', [MemberController::class, 'update'])->name('update');
    Route::get('delete/{member}', [MemberController::class, 'destroy'])->name('delete');
});

Route::prefix('trainer')->name('trainer.')->group(function(){
    Route::get('/', [TrainerController::class, 'index'])->name('index');
    Route::get('create', [TrainerController::class, 'create'])->name('create');
    Route::post('store', [TrainerController::class, 'store'])->name('store');
    Route::get('edit/{trainer}', [TrainerController::class, 'edit'])->name('edit');
    Route::post('update/{trainer}', [TrainerController::class, 'update'])->name('update');
    Route::get('delete/{trainer}', [TrainerController::class, 'destroy'])->name('delete');
});


//
//Route::prefix('membership')->name('membership.')->group(function(){
//    Route::get('/', [MembershipController::class, 'index'])->name('index');
//    Route::get('create', [MembershipController::class, 'create'])->name('create');
//    Route::post('store', [MembershipController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [MembershipController::class, 'edit'])->name('edit');
//    Route::post('update', [MembershipController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [MembershipController::class, 'delete'])->name('delete');
//});
//
//Route::prefix('equipment')->name('equipment.')->group(function(){
//    Route::get('/', [EquipmentController::class, 'index'])->name('index');
//    Route::get('create', [EquipmentController::class, 'create'])->name('create');
//    Route::post('store', [EquipmentController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [EquipmentController::class, 'edit'])->name('edit');
//    Route::post('update', [EquipmentController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [EquipmentController::class, 'delete'])->name('delete');
//});
//
//Route::prefix('invoice')->name('invoice.')->group(function(){
//    Route::get('/', [InvoiceController::class, 'index'])->name('index');
//    Route::get('create', [InvoiceController::class, 'create'])->name('create');
//    Route::post('store', [InvoiceController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [InvoiceController::class, 'edit'])->name('edit');
//    Route::post('update', [InvoiceController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [InvoiceController::class, 'delete'])->name('delete');
//});
//
//Route::prefix('attendance')->name('attendance.')->group(function(){
//    Route::get('/', [AttendanceController::class, 'index'])->name('index');
//    Route::get('create', [AttendanceController::class, 'create'])->name('create');
//    Route::post('store', [AttendanceController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [AttendanceController::class, 'edit'])->name('edit');
//    Route::post('update', [AttendanceController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [AttendanceController::class, 'delete'])->name('delete');
//});
//
//
//Route::prefix('payment')->name('payment.')->group(function(){
//    Route::get('/', [PaymentController::class, 'index'])->name('index');
//    Route::get('create', [PaymentController::class, 'create'])->name('create');
//    Route::post('store', [PaymentController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [PaymentController::class, 'edit'])->name('edit');
//    Route::post('update', [PaymentController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [PaymentController::class, 'delete'])->name('delete');
//});
//
//Route::prefix('category')->name('category.')->group(function(){
//    Route::get('/', [CategoryController::class, 'index'])->name('index');
//    Route::get('create', [CategoryController::class, 'create'])->name('create');
//    Route::post('store', [CategoryController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [CategoryController::class, 'edit'])->name('edit');
//    Route::post('update', [CategoryController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [CategoryController::class, 'delete'])->name('delete');
//});
//
//Route::prefix('product')->name('product.')->group(function(){
//    Route::get('/', [ProductController::class, 'index'])->name('index');
//    Route::get('create', [ProductController::class, 'create'])->name('create');
//    Route::post('store', [ProductController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [ProductController::class, 'edit'])->name('edit');
//    Route::post('update', [ProductController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [ProductController::class, 'delete'])->name('delete');
//});
//
//Route::prefix('gallery')->name('gallery.')->group(function(){
//    Route::get('/', [GalleryController::class, 'index'])->name('index');
//    Route::get('create', [GalleryController::class, 'create'])->name('create');
//    Route::post('store', [GalleryController::class, 'store'])->name('store');
//    Route::get('edit/{member}', [GalleryController::class, 'edit'])->name('edit');
//    Route::post('update', [GalleryController::class, 'update'])->name('update');
//    Route::get('delete/{member}', [GalleryController::class, 'delete'])->name('delete');
//});
