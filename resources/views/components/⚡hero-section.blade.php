<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="hero light-bg-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Hero Left Content Start -->
                <div class="hero-content">
                    <!-- Google Rating Start -->
                    <div class="google-rating wow fadeInUp">
                        <ul>
                            <li>{{ __('home.hero_subtitle') }}</li>
                        </ul>   
                    </div>
                    <!-- Google Rating End -->

                    <div class="section-title">
                        <h1 class="text-anime-style-3">{{ __('home.hero_title') }}</h1>
                    </div>
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                        <p>{{ __('home.hero_text') }}</p>
                    </div>

                    <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                        <a href="{{ route('contact') }}" class="btn-default">{{ __('buttons.work_with_us') }}</a>
                        <a href="{{ route('services') }}" class="btn-default btn-highlighted">{{ __('buttons.view_our_services') }}</a>
                    </div>
                </div>
                <!-- Hero Left Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Hero Image Start -->
                <div class="hero-image">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/new/home_img_1.jpg') }}" alt="Nordicsiffran" />
                    </figure>                            
                </div>
                <!-- Hero Image End -->
            </div>
        </div>
    </div>
</div>
