<?php

use Livewire\Component;

new class extends Component
{
    public $service;
};
?>

<div class="service-single-content">
    <div class="service-entry">
        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
            <h2 class="text-anime-style-3">{{ __($service['title']) }}</h2>
            {!! __($service['description']) !!}
        </div>
    </div>
</div>