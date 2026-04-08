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
                    <h3 class="wow fadeInUp">why choose us</h3>
                    <h2 class="text-anime-style-3">Why choose us as your trusted financial partner?</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        @if($route === 'home')
            <div class="row">
                <div class="col-lg-12">
                    <!-- Why Choose Image Box Start -->
                    <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image">
                            <img src="{{ Vite::asset('resources/images/why-choose-us-img.jpg') }}" alt="Norricsiffran" />
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Why Choose Content Start -->
                        <div class="why-choose-content">
                            <!-- Why Choose Title Start -->
                            <div class="why-choose-title">
                                <h2 class="text-anime-style-3">Experience seamless, secure, and efficient account management</h2>
                            </div>
                            <!-- Why Choose Title End -->

                            <!-- Why Choose Counter Start -->
                            <div class="why-choose-counter">
                                <h3><span class="counter">12</span> Years</h3>
                                <p>in accounting services</p>
                            </div>
                            <!-- Why Choose Counter End -->
                        </div>
                        <!-- Why Choose Content End -->
                    </div>
                    <!-- Why Choose Image Box End -->
                </div>                
            </div>
        @endif

        <div class="row">
            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-why-choose-1.svg') }}" alt="Norricsiffran" />
                    </div>
                    <div class="why-choose-body">
                        <h3>expertise you can trust</h3>
                        <p>Quisque ligula quam, tempus non tempor sed, tempor in ligula. In sit amet orci elit. Donec egestas eros sit amet odio ultricies fermentum. Phasellus ullamcorper.</p>
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
                        <h3>transparent communication</h3>
                        <p>Quisque ligula quam, tempus non tempor sed, tempor in ligula. In sit amet orci elit. Donec egestas eros sit amet odio ultricies fermentum. Phasellus ullamcorper.</p>
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
                        <h3>client satisfaction</h3>
                        <p>Quisque ligula quam, tempus non tempor sed, tempor in ligula. In sit amet orci elit. Donec egestas eros sit amet odio ultricies fermentum. Phasellus ullamcorper.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
        </div>
    </div>
</div>