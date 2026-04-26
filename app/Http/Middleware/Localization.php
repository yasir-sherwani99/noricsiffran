<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
        // get locale from URL parameter
        $locale = $request->route('locale');
        
        // if no locale in URL, use default (sv)
        if (!$locale) {            
            $locale = Session::get('locale', config('app.locale', 'sv'));
        }
        
        // validate locale
        $allowedLocales = ['sv', 'en'];

        if (!in_array($locale, $allowedLocales)) {
            $locale = 'sv';
        }
        
        // set application locale
        App::setLocale($locale);
        
        // store in session for other uses
        Session::put('locale', $locale);
        
        // generate URLs with current locale
        URL::defaults(['locale' => $locale]);
        
        return $next($request);
    }
}