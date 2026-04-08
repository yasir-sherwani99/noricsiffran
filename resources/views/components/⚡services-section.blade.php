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

<div class="{{ $route === 'home' ? 'our-service light-bg-section' : 'page-services' }}">
    <div class="container">
        @if($route === 'home')
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-3">Your business goals are our priority</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-4">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="service-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ Vite::asset('resources/images/service-img-1.jpg') }}" alt="Noricsiffran"></a>
                        </figure>
                    </div>
                    <div class="service-content">
                        <h3>tax planning and preparation</h3>
                        <div class="service-readmore-btn">
                            <a href="#" class="btn-default">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-md-4">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ Vite::asset('resources/images/service-img-2.jpg') }}" alt="Noricsiffran"></a>
                        </figure>
                    </div>
                    <div class="service-content">
                        <h3>book keeping and accounting</h3>
                        <div class="service-readmore-btn">
                            <a href="#" class="btn-default">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-md-4">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="service-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ Vite::asset('resources/images/service-img-3.jpg') }}" alt="Noricsiffran"></a>
                        </figure>
                    </div>
                    <div class="service-content">
                        <h3>business advisory service</h3>
                        <div class="service-readmore-btn">
                            <a href="#" class="btn-default">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            @if($route === 'services')
                <div class="col-md-4">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="service-image">
                            <figure class="image-anime">
                                <a href="#"><img src="{{ Vite::asset('resources/images/service-img-4.jpg') }}" alt="Noricsiffran"></a>
                            </figure>
                        </div>
                        <div class="service-content">
                            <h3>annual accounts services</h3>
                            <div class="service-readmore-btn">
                                <a href="#" class="btn-default">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="service-image">
                            <figure class="image-anime">
                                <a href="#"><img src="{{ Vite::asset('resources/images/service-img-5.jpg') }}" alt="Noricsiffran"></a>
                            </figure>
                        </div>
                        <div class="service-content">
                            <h3>accounting for freelancers</h3>
                            <div class="service-readmore-btn">
                                <a href="#" class="btn-default">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.5s">
                        <div class="service-image">
                            <figure class="image-anime">
                                <a href="#"><img src="{{ Vite::asset('resources/images/service-img-6.jpg') }}" alt="Noricsiffran"></a>
                            </figure>
                        </div>
                        <div class="service-content">
                            <h3>small business accounting</h3>
                            <div class="service-readmore-btn">
                                <a href="#" class="btn-default">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            @endif

            @if($route === 'home')
                <!-- Services Footer Btn Start -->
                <div class="service-footer-btn wow fadeInUp" data-wow-delay="0.5s">
                    <a href="#" class="btn-default">view all services</a>
                </div>
                <!-- Services Footer Btn End -->
            @endif
        </div>
    </div>
</div>