<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="page-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="page-about-image">
                    <!-- About Image Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ Vite::asset('resources/images/page-about-1.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- About Image Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ Vite::asset('resources/images/page-about-2.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- About Image End -->
                    
                    <!-- Satisfied Client Start -->
                    <div class="satisfied-client">
                        <div class="satisfied-client-icon">
                            <img src="{{ Vite::asset('resources/images/icon-satisfied-client.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="satisfied-client-content">
                            <h3><span class="counter">1500</span>+</h3>
                            <p>satisfied client</p>
                        </div>
                    </div>
                    <!-- Satisfied Client End -->
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about our company</h3>
                        <h2 class="text-anime-style-3">Welcome to our accounting company</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body wow fadeInUp" data-wow-delay="0.25s">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                    </div>
                    <!-- About Content Body End -->

                    <!-- About Content Footer Start -->
                    <div class="about-content-footer">
                        <!-- About Company Service Start -->
                        <div class="about-company-service wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="{{ Vite::asset('resources/images/icon-company-service-1.svg') }}" alt="Noricsiffran" />
                            </div>
                            <div class="company-service-content">
                                <h3>best quality services</h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <!-- About Company Service End -->

                        <!-- About Company Service Start -->
                        <div class="about-company-service wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="{{ Vite::asset('resources/images/icon-company-service-2.svg') }}" alt="Noricsiffran" />
                            </div>
                            <div class="company-service-content">
                                <h3>professional agents</h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <!-- About Company Service End -->
                    </div>
                    <!-- About Content Footer End -->
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>