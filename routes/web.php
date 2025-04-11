<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Public routes
Route::get('/', [PortfolioController::class, 'about'])->name('home');

// Portfolio routes
Route::prefix('portfolio')->name('portfolio.')->group(function () {
    Route::get('/', [PortfolioController::class, 'about'])->name('index');
    Route::get('/about', [PortfolioController::class, 'about'])->name('about');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
});

// Admin routes dengan middleware auth
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/portfolio', [PortfolioController::class, 'adminIndex'])->name('admin.portfolio.index');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
});