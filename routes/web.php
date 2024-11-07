<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client-and-partners', function () {
    return view('partners');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/about-us.html', function () {
    return view('about-us');
});

Route::get('/our-portfolio', function () {
    return view('portfolio');
});


Route::get('/our-services', function () {
    return view('portfolio');
});



Route::get('/contact-us', function () {
    return view('portfolio');
});

Route::get('/our-services/{slung}', [App\Http\Controllers\HomeController::class, 'services'])->name('our-services');
Route::get('/our-portfolio/{slung}', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('our-portfolio');
Auth::routes();

// Route::get('/our-services/{slung}', [App\Http\Controllers\HomeController::class, 'services'])->name('our-services');
