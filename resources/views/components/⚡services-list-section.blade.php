<?php

use Livewire\Component;

new class extends Component
{
    public $services;
};
?>

<div class="service-catagery-list wow fadeInUp">
    <h3>{{ __('services.section') }}</h3>
    @if (count($services) > 0)
        <ul>
            @foreach ($services as $service)
              <li><a href="{{ route('service.details', $service['slug']) }}">{{ __($service['name']) }}</a></li>
            @endforeach  
        </ul>
    @else
        <p>No service found!</p>
    @endif
</div>