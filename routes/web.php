<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/send-contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');