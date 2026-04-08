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
                        <h3 class="wow fadeInUp">financial planning</h3>
                        <h2 class="text-anime-style-3">Thorough planning services ensuring compliance and financial security</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Company Planning Body Start -->
                    <div class="company-planning-body">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <ul class="wow fadeInUp" data-wow-delay="0.5s">
                            <li>goal-oriented strategies</li>
                            <li>optimized investments</li>
                            <li>financial security</li>
                        </ul>
                    </div>
                    <!-- Company Planning Body End -->

                    <!-- Company Planning Footer Start -->
                    <div class="company-planning-footer wow fadeInUp" data-wow-delay="0.75s">
                        <a href="#" class="btn-default">read more</a>
                    </div>
                    <!-- Company Planning Footer End -->
                </div>
                <!-- Company Planning Content Start -->
            </div>
        </div>
    </div>
</div>