<?php
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('', [PortfolioController::class, 'index'])->name('index-home');

Route::get('/portfolio-home', [PortfolioController::class, 'index'])->name('portfolio-home.index');
Route::get('/portfolio-about', [PortfolioController::class, 'about'])->name('about.index');
Route::get('/portfolio-skills', [PortfolioController::class, 'skills'])->name('skills.index');
Route::get('/portfolio-education', [PortfolioController::class, 'education'])->name('education.index');
Route::get('/portfolio-experience', [PortfolioController::class, 'experience'])->name('experience.index');
Route::get('/portfolio-contact', [PortfolioController::class, 'contact'])->name('contact.index');


?>
