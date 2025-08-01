<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// 1) Ruta que cambia el idioma y redirige a home?reveal=1
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['es','en'])) {
        session(['locale' => $locale]);
        App::setLocale($locale);
    }
    return redirect()->route('home', ['reveal' => 1]);
})->name('lang.switch');

// 2) Aquí agrupamos TODO lo demás usando SetLocale
Route::middleware([SetLocale::class])->group(function() {

    // Splash o home real
    Route::get('/', [PageController::class, 'home'])->name('home');
    // Otras páginas estáticas
    Route::get('/quienes-somos', [PageController::class, 'quienes'])->name('quienes');
    Route::get('/servicios',      [PageController::class, 'servicios'])->name('servicios');
    Route::get('/portafolio',     [PageController::class, 'portafolio'])->name('portafolio');
    Route::get('/faq',            [PageController::class, 'faq'])->name('faq');
    Route::get('/contacto',       [PageController::class, 'contactoForm'])->name('contacto');

    // Formulario de contacto
    Route::post('/contact', [ContactController::class, 'send'])
         ->name('contact.send')
         ->middleware('throttle:3,10');
});
