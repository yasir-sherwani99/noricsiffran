<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="company-planning light-bg-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Company Planning Image Start -->
                <div class="company-planning-image wow fadeInUp">
                    <img src="{{ Vite::asset('resources/images/company-planning-img.png') }}" alt="Noricsiffran" />
                </div>
                <!-- Company Planning Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Company Planning Content Start -->
                <div class="company-planning-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.our_vision') }}</h3>
                        <h2 class="text-anime-style-3">{{ __('about.vision_title') }}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Company Planning Body Start -->
                    <div class="company-planning-body">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('about.vision_desc') }}.</p>
                        <p>{{ __('about.our_offer') }}:</p>
                        <ul class="wow fadeInUp" data-wow-delay="0.5s">
                            <li>{{ __('about.service_1') }}</li>
                            <li>{{ __('about.service_2') }}</li>
                            <li>{{ __('about.service_3') }}</li>
                            <li>{{ __('about.service_4') }}</li>
                            <li>{{ __('about.service_5') }}</li>

                        </ul>
                    </div>
                    <!-- Company Planning Body End -->

                    <!-- Company Planning Footer Start -->
                    {{-- <div class="company-planning-footer wow fadeInUp" data-wow-delay="0.75s">
                        <a href="#" class="btn-default">read more</a>
                    </div> --}}
                    <!-- Company Planning Footer End -->
                </div>
                <!-- Company Planning Content Start -->
            </div>
        </div>
    </div>
</div>