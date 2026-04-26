<?php

namespace App\Livewire;

use Livewire\Component;

class Services extends Component
{
    public array $services = [
        [
            'slug' => 'service-1',
            'name' => 'services.our_services_1',
            'image' => 'service-img-1.jpg'
        ],
        [
            'slug' => 'service-2',
            'name' => 'services.our_services_2',
            'image' => 'service-img-2.jpg'
        ],
        [
            'slug' => 'service-3',
            'name' => 'services.our_services_3',
            'image' => 'service-img-3.jpg'
        ],
        [
            'slug' => 'service-4',
            'name' => 'services.our_services_4',
            'image' => 'service-img-4.jpg'
        ],
        [
            'slug' => 'service-5',
            'name' => 'services.our_services_5',
            'image' => 'service-img-5.jpg'
        ],
        [
            'slug' => 'service-6',
            'name' => 'services.our_services_6',
            'image' => 'service-img-6.jpg'
        ]
    ];
    
    public function render()
    {
        return view('livewire.services')->layout('layouts.app');
    }
}
