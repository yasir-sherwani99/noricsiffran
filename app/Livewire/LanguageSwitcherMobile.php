<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class LanguageSwitcherMobile extends Component
{
    public $currentLocale;
    public $languages = [
        'sv' => ['name' => 'Svenska', 'flag' => 'se', 'code' => 'sv'],
        'en' => ['name' => 'English', 'flag' => 'gb', 'code' => 'en'],
    ];
    
    public function mount()
    {
        $this->currentLocale = App::getLocale();
    }
    
    public function switchLanguage($locale)
    {
        // redirect to new localized URL
        if ($locale === $this->currentLocale) {
            return;
        }
        
        // redirect to language switch route
        return redirect()->route('language.switch', ['locale' => $locale]);
    }

    public function render()
    {
        return view('livewire.language-switcher-mobile');
    }
}
