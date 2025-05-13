<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/services', function () {
    return view('services'); // Ensure you have a 'services.blade.php' file in 'resources/views'
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    return view('welcome');
});
