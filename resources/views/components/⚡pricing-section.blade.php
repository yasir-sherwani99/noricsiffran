<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="our-pricing light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our pricing</h3>
                    <h2 class="text-anime-style-3">Discover affordable and flexible packages</h2>
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

        <div class="row">
            <div class="col-lg-4">
                <!-- Pricing Item Start -->
                <div class="pricing-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Pricing Header Start -->
                    <div class="pricing-header">
                        <div class="icon-box">
                            <img src="{{ Vite::asset('resources/images/icon-pricing-1.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="pricing-content">
                            <h3>solo traders</h3>
                            <p>accounting for sole traders</p>
                        </div>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Body Start -->
                    <div class="pricing-body">
                        <h2>$28</h2>
                        <p>per month</p>
                    </div>
                    <!-- Pricing Body End -->

                    <!-- Pricing Footer Start -->
                    <div class="pricing-footer">
                        <a href="#" class="btn-default">see all features</a>
                    </div>
                    <!-- Pricing Footer End -->
                </div>
                <!-- Pricing Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Pricing Item Start -->
                <div class="pricing-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Pricing Header Start -->
                    <div class="pricing-header">
                        <div class="icon-box">
                            <img src="{{ Vite::asset('resources/images/icon-pricing-2.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="pricing-content">
                            <h3>limited co.</h3>
                            <p>accounting for small business</p>
                        </div>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Body Start -->
                    <div class="pricing-body">
                        <h2>$59</h2>
                        <p>per month</p>
                    </div>
                    <!-- Pricing Body End -->

                    <!-- Pricing Footer Start -->
                    <div class="pricing-footer">
                        <a href="#" class="btn-default">see all features</a>
                    </div>
                    <!-- Pricing Footer End -->
                </div>
                <!-- Pricing Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Pricing Item Start -->
                <div class="pricing-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Pricing Header Start -->
                    <div class="pricing-header">
                        <div class="icon-box">
                            <img src="{{ Vite::asset('resources/images/icon-pricing-3.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="pricing-content">
                            <h3>partnership</h3>
                            <p>accounting for partnerships</p>
                        </div>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Body Start -->
                    <div class="pricing-body">
                        <h2>$49</h2>
                        <p>per month</p>
                    </div>
                    <!-- Pricing Body End -->

                    <!-- Pricing Footer Start -->
                    <div class="pricing-footer">
                        <a href="#" class="btn-default">see all features</a>
                    </div>
                    <!-- Pricing Footer End -->
                </div>
                <!-- Pricing Item End -->
            </div>
        </div>
    </div>
</div>