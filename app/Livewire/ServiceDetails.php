<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceDetails extends Component
{
    public array $service = [];
    public array $services = [
        [
            'slug' => 'service-1',
            'name' => 'services.our_services_1',
            'image' => 'service-img-1.jpg',
            'title' => 'services.services_1_title',
            'description' => 'services.services_1_desc'
        ],
        [
            'slug' => 'service-2',
            'name' => 'services.our_services_2',
            'image' => 'service-img-2.jpg',
            'title' => 'services.services_2_title',
            'description' => 'services.services_2_desc'
        ],
        [
            'slug' => 'service-3',
            'name' => 'services.our_services_3',
            'image' => 'service-img-3.jpg',
            'title' => 'services.services_3_title',
            'description' => 'services.services_3_desc'
        ],
        [
            'slug' => 'service-4',
            'name' => 'services.our_services_4',
            'image' => 'service-img-4.jpg',
            'title' => 'services.services_4_title',
            'description' => 'services.services_4_desc'
        ],
        [
            'slug' => 'service-5',
            'name' => 'services.our_services_5',
            'image' => 'service-img-5.jpg',
            'title' => 'services.services_5_title',
            'description' => 'services.services_5_desc'
        ],
        [
            'slug' => 'service-6',
            'name' => 'services.our_services_6',
            'image' => 'service-img-6.jpg',
            'title' => 'services.services_6_title',
            'description' => 'services.services_6_desc'
        ]
    ];

    public function mount($slug)
    {
        $this->service = collect($this->services)
            ->firstWhere('slug', $slug);

        abort_if(!$this->service, 404);
    }

    public function render()
    {
        return view('livewire.service-details')->layout('layouts.app');
    }
}
