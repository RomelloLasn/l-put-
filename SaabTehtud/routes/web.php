<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

Route::post('/contact', function (Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    $data = $request->only('name', 'email', 'phone', 'message');

    // Send the email
    Mail::to('your-email@gmail.com')->send(new ContactFormMail($data));

    return back()->with('success', 'Your message has been sent successfully!');
})->name('contact.submit');

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
