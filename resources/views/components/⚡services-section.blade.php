<?php

use Livewire\Component;

new class extends Component
{
    public $route;
    public $services;

    public function mount()
    {
        $this->route = request()->route()->getName();
    }
};
?>

<div class="{{ $route === 'home' ? 'our-service light-bg-section' : 'page-services' }}">
    <div class="container">
        @if($route === 'home')
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('services.section') }}</h3>
                        <h2 class="text-anime-style-3">{{ __('services.title') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>{{ __('services.text') }}</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>
        @endif

        <div class="row">
            @if($route === 'home')
                @foreach (array_slice($services, 0, 3) as $service)
                    <div class="col-md-4">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="service-image">
                                <figure class="image-anime">
                                    <a href="#"><img src="{{ Vite::asset('resources/images/new/' . $service['image']) }}" alt="Nordicsiffran" /></a>
                                </figure>
                            </div>
                            <div class="service-content">
                                <h3>{{ __($service['name']) }}</h3>
                                <div class="service-readmore-btn">
                                    <a href="#" class="btn-default">{{ __('buttons.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                @endforeach
            @endif

            @if($route === 'services')
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="service-image">
                                <figure class="image-anime">
                                    <a href="#"><img src="{{ Vite::asset('resources/images/new/' . $service['image']) }}" alt="Nordicsiffran"></a>
                                </figure>
                            </div>
                            <div class="service-content">
                                <h3>{{ __($service['name']) }}</h3>
                                <div class="service-readmore-btn">
                                    <a href="{{ route('service.details', $service['slug']) }}" class="btn-default">{{ __('buttons.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                @endforeach
            @endif

            @if($route === 'home')
                <!-- Services Footer Btn Start -->
                <div class="service-footer-btn wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ route('services') }}" class="btn-default">{{ __('buttons.view_all_services') }}</a>
                </div>
                <!-- Services Footer Btn End -->
            @endif
        </div>
    </div>
</div>