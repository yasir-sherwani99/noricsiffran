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
                    <h3 class="wow fadeInUp">{{ __('pricing.section') }}</h3>
                    <h2 class="text-anime-style-3">{{ __('pricing.title') }}</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>{{ __('pricing.text') }}.</p>
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
                            <h3>{{ __('pricing.package_small') }}</h3>
                            <p>{{ __('pricing.package_small_headline') }}</p>
                        </div>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Body Start -->
                    <div class="pricing-body">
                        <small>{{ __('pricing.from') }}</small>
                        <h2>495</h2>
                        <p>{{ __('pricing.kr_per_mon') }}</p>
                    </div>
                    <!-- Pricing Body End -->

                    <!-- Pricing Footer Start -->
                    <div class="pricing-footer">
                        <a href="#" class="btn-default">{{ __('buttons.see_all_features') }}</a>
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
                            <h3>{{ __('pricing.package_medium') }}</h3>
                            <p>{{ __('pricing.package_medium_headline') }}</p>
                        </div>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Body Start -->
                    <div class="pricing-body">
                        <small>{{ __('pricing.from') }}</small>
                        <h2>995</h2>
                        <p>{{ __('pricing.kr_per_mon') }}</p>
                    </div>
                    <!-- Pricing Body End -->

                    <!-- Pricing Footer Start -->
                    <div class="pricing-footer">
                        <a href="#" class="btn-default">{{ __('buttons.see_all_features') }}</a>
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
                            <h3>{{ __('pricing.package_large') }}</h3>
                            <p>{{ __('pricing.package_large_headline') }}</p>
                        </div>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Body Start -->
                    <div class="pricing-body">
                        <small>{{ __('pricing.from') }}</small>
                        <h2>1195</h2>
                        <p>{{ __('pricing.kr_per_mon') }}</p>
                    </div>
                    <!-- Pricing Body End -->

                    <!-- Pricing Footer Start -->
                    <div class="pricing-footer">
                        <a href="#" class="btn-default">{{ __('buttons.see_all_features') }}</a>
                    </div>
                    <!-- Pricing Footer End -->
                </div>
                <!-- Pricing Item End -->
            </div>
        </div>
    </div>
</div>