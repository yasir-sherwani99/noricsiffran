<?php

namespace App\Livewire;

use Livewire\Component;

class Pricing extends Component
{
    public array $packages = [
        [
            'name' => 'pricing.package_small',
            'text' => 'pricing.package_small_headline',
            'price' => '495',
            'features' => [
                'pricing.feature_1',
                'pricing.feature_2',
                'pricing.feature_3',
                'pricing.feature_5',
                'pricing.feature_6',
                'pricing.feature_9'
            ]

        ],
        [
            'name' => 'pricing.package_medium',
            'text' => 'pricing.package_medium_headline',
            'price' => '995',
            'features' => [
                'pricing.feature_1',
                'pricing.feature_2',
                'pricing.feature_4',
                'pricing.feature_5',
                'pricing.feature_7',
                'pricing.feature_8',
                'pricing.feature_9',
                'pricing.feature_10',
            ]
        ],
        [
            'name' => 'pricing.package_large',
            'text' => 'pricing.package_large_headline',
            'price' => '1195',
            'features' => [
                'pricing.feature_11',
                'pricing.feature_12',
                'pricing.feature_13',
                'pricing.feature_14',
                'pricing.feature_15',
                'pricing.feature_16'
            ]
        ]
    ];

    public function render()
    {
        return view('livewire.pricing')->layout('layouts.app');
    }
}
