<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="our-employee">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="employee-image">
                    <img src="{{ Vite::asset('resources/images/employee-img.png') }}" alt="Noricsiffran" />
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Employee Content Start -->
                <div class="employee-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('home.choose_section') }}</h3>
                        <h2 class="text-anime-style-3">{{ __('home.employee_title') }}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Employee Body Start -->
                    <div class="employee-body wow fadeInUp" data-wow-delay="0.25s">
                        <p>{{ __('home.employee_text') }}</p>
                    </div>
                    <!-- Employee Body End -->

                    <!-- Employee Footer Start -->
                    <div class="employee-footer">
                        <!-- Employee Counter Box Start -->
                        <div class="employee-counter-box">
                            <h3><span class="counter">500</span>+</h3>
                            <p>successful audits</p>
                        </div>
                        <!-- Employee Counter Box End -->

                        <!-- Employee Counter Box Start -->
                        <div class="employee-counter-box">
                            <h3><span class="counter">98</span>%</h3>
                            <p>on-time filing rate</p>
                        </div>
                        <!-- Employee Counter Box End -->
                    </div>
                    <!-- Employee Footer End -->
                </div>
                <!-- Employee Content End -->
            </div>
        </div>
    </div>
</div>