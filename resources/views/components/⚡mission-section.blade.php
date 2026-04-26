<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="why-choose-us light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ __('about.our_mission') }}</h3>
                    <h2 class="text-anime-style-3">{{ __('about.mission_title') }}</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>{{ __('about.mission_desc') }}.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-1.svg') }}" alt="Norricsiffran" />
                    </div>
                    <div class="why-choose-body">
                        <h3>{{ __('home.choose_subtitle_1') }}</h3>
                        <p>{{ __('home.choose_content_1') }}</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-2.svg') }}" alt="Norricsiffran" />
                    </div>
                    <div class="why-choose-body">
                        <h3>{{ __('home.choose_subtitle_2') }}</h3>
                        <p>{{ __('home.choose_content_2') }}</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-3.svg') }}" alt="Norricsiffran" />
                    </div>
                    <div class="why-choose-body">
                        <h3>{{ __('home.choose_subtitle_3') }}</h3>
                        <p>{{ __('home.choose_content_3') }}</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
        </div>
    </div>
</div>