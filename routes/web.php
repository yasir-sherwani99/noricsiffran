<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Services;
use App\Livewire\Automation;
use App\Livewire\Faqs;
use App\Livewire\Pricing;
use App\Livewire\ServiceDetails;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Language Switch Route
|--------------------------------------------------------------------------
*/
Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['sv', 'en'])) {
        $locale = 'sv';
    }
    
    // Store in session
    session(['locale' => $locale]);
    
    // Get the previous URL and replace the locale
    $previousUrl = url()->previous();
    $parsedUrl = parse_url($previousUrl);
    $path = $parsedUrl['path'] ?? '/';
    
    // Remove existing locale from path
    $cleanPath = preg_replace('#^/(sv|en)(/|$)#', '/', $path);
    $cleanPath = trim($cleanPath, '/');
    
    // Build new URL
    if (empty($cleanPath)) {
        $newUrl = url("/{$locale}");
    } else {
        $newUrl = url("/{$locale}/{$cleanPath}");
    }
    
    // Preserve query string
    if (!empty($parsedUrl['query'])) {
        $newUrl .= '?' . $parsedUrl['query'];
    }
    
    return redirect($newUrl);
})->name('language.switch');

/*
|--------------------------------------------------------------------------
| Main Routes with Language Prefix
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'sv|en']], function () {
    Route::get('/', Home::class)->name('home');
    Route::get('about', About::class)->name('about');
    Route::get('services', Services::class)->name('services');
    Route::get('service/{slug}', ServiceDetails::class)->name('service.details');
    Route::get('contact', Contact::class)->name('contact');
    Route::get('automation', Automation::class)->name('automation');
    Route::get('pricing', Pricing::class)->name('pricing'); 
    Route::get('faqs', Faqs::class)->name('faqs'); 
});

/*
|--------------------------------------------------------------------------
| Redirect root to default language
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/sv');
});