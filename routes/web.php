<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/siswas', [SiswaController::class, 'index'])->name('siswas.index');
    Route::get('/siswas/create', [SiswaController::class, 'create'])->name('siswas.create');  
    Route::post('/siswas', [SiswaController::class, 'store'])->name('siswas.store');
    
    Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');

    Route::get('/jurusans', [JurusanController::class, 'index'])->name('jurusans.index');
    Route::get('/jurusans/create', [JurusanController::class, 'create'])->name('jurusans.create');
    Route::post('/jurusans', [JurusanController::class, 'store'])->name('jurusans.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
