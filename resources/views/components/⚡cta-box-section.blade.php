<?php

use Livewire\Component;

new class extends Component
{
    public $route;

    public function mount()
    {
        $this->route = request()->route()->getName();
    }
};
?>

<div class="{{ $route === 'services' ? 'cta-box service-cta' : 'cta-box' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class="text-anime-style-3">Looking for a premium accounting for your business?</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-4">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="#" class="btn-default btn-highlighted btn-large">get started</a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>
    </div>
</div>