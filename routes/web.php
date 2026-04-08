<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Services;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('about', About::class)->name('about');
Route::get('services', Services::class)->name('services');
Route::get('contact', Contact::class)->name('contact');
