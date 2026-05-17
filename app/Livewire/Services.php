<?php

namespace App\Livewire;

use Livewire\Component;

class Services extends Component
{
    public array $services = [
        [
            'slug' => 'bookkeeping-and-ongoing-accounting',
            'name' => 'services.our_services_1',
            'image' => 'service-img-1.jpg'
        ],
        [
            'slug' => 'banking-and-payment-flows',
            'name' => 'services.our_services_2',
            'image' => 'service-img-2.jpg'
        ],
        [
            'slug' => 'invoicing-and-customer-flows',
            'name' => 'services.our_services_3',
            'image' => 'service-img-3.jpg'
        ],
        [
            'slug' => 'tax-and-declarations',
            'name' => 'services.our_services_4',
            'image' => 'service-img-4.jpg'
        ],
        [
            'slug' => 'year-end-closing-and-annual-reports',
            'name' => 'services.our_services_5',
            'image' => 'service-img-5.jpg'
        ],
        [
            'slug' => 'starting-restructuring-and-closing-a-business',
            'name' => 'services.our_services_6',
            'image' => 'service-img-6.jpg'
        ]
    ];
    
    public function render()
    {
        return view('livewire.services')->layout('layouts.app');
    }
}
