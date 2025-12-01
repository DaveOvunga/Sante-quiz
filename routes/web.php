<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/Apropos', [ProjectController::class, 'about'])->name('about');

Route::get('/Projet', [ProjectController::class, 'index'])->name('project');

// Route::get('/Projet-details', [HomeController::class, 'projetdetails'])->name('projetdetails');

Route::get('/project/{id}', [ProjectController::class, 'show'])->name('projetdetails');

Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/teamdetails', [HomeController::class, 'teamdetails'])->name('teamdetails');

Route::get('/gallery-image', [GalleryController::class, 'index'])->name('gallery');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/service-details', [HomeController::class, 'servicedetails'])->name('servicedetails');

Route::get('/news', [HomeController::class, 'news'])->name('news');

Route::get('/news/{id}', [HomeController::class, 'newsdetails'])->name('newsdetails');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

// Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.details');




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


