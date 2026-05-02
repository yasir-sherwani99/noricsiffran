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

<div class="why-choose-us light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ __('home.choose_section') }}</h3>
                    <h2 class="text-anime-style-3">{{ __('home.choose_title') }}</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>{{ __('home.choose_text') }}</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        @if($route === 'home')
            <!--
            <div class="row">
                <div class="col-lg-12">
                    <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.25s">
                        <div class="why-choose-image">
                            <img src="{{-- Vite::asset('resources/images/why-choose-us-img.jpg') --}}" alt="Norricsiffran" />
                        </div>
                        <div class="why-choose-content">
                            <div class="why-choose-title">
                                <h2 class="text-anime-style-3">Experience seamless, secure, and efficient account management</h2>
                            </div>

                            <div class="why-choose-counter">
                                <h3><span class="counter">12</span> Years</h3>
                                <p>in accounting services</p>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            -->
        @endif

        <div class="row">
            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-1.svg') }}" alt="Nordicsiffran" />
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
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-2.svg') }}" alt="Nordicsiffran" />
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
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-3.svg') }}" alt="Nordicsiffran" />
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