<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/management', [HomeController::class, 'management']);
Route::get('/certificate', [HomeController::class, 'certificate']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/services/aircraft', [HomeController::class, 'aircraft']);
Route::get('/services/component', [HomeController::class, 'component']);
Route::get('/services/spesialized', [HomeController::class, 'spesialized']);
Route::get('/services/calibration', [HomeController::class, 'calibration']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/contact', [HomeController::class, 'contact']);

// Auth
Route::get('/admin', [AuthController::class, 'login'])->name('login');
Route::post('/admin', [AuthController::class, 'authenticated']);

// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('sliders', SliderController::class);
    Route::resource('management', ManagementController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('location', LocationController::class);
    Route::resource('news', NewsController::class);
    Route::resource('location', LocationController::class);

    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

    Route::post('/logout', AuthController::class)->name('logout');
});
