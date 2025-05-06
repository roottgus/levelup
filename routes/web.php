<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/**
 * Rutas de páginas estáticas gestionadas por PageController
 */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/quienes-somos', [PageController::class, 'quienes'])->name('quienes');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/portafolio', [PageController::class, 'portafolio'])->name('portafolio');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contacto', [PageController::class, 'contactoForm'])->name('contacto');

/**
 * Envío de formulario de contacto
 */
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
