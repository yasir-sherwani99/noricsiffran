<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="state-counter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">state of affairs</h3>
                    <h2 class="text-anime-style-3">Keeping you informed on tax laws and financial trends</h2>
                </div>
                <!-- Section Title End -->

                <!-- Counter Contact Btn Start -->
                <div class="counter-contact-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="#" class="btn-default">contact us</a>
                </div>
                <!-- Counter Contact Btn End -->
            </div>

            <div class="col-lg-7">
                <!-- State Image Counter Start -->
                <div class="state-image-counter-1">
                    <!-- Counter Box Start -->
                    <div class="counter-box wow fadeInUp">
                        <div class="counter-content">
                            <h3><span class="counter">980</span>+</h3>
                            <p>Financial Audits Conducted Annually</p>
                        </div>
                    </div>
                    <!-- Counter Box End -->

                    <!-- Counter Box Image Start -->
                    <div class="counter-box counter-image wow fadeInUp" data-wow-delay="0.25s">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/counter-img-1.jpg') }}" alt="Nordicsiffran">
                        </figure>
                    </div>
                    <!-- Counter Box Image End -->

                    <!-- Counter Box Start -->
                    <div class="counter-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-content" wire:ignore>
                            <h3><span class="counter">1984</span>+</h3>
                            <p>Satisfied Clients and Counting</p>
                        </div>
                    </div>
                    <!-- Counter Box End -->
                </div>
                <!-- State Image Counter End -->

                <!-- State Image Counter Start -->
                <div class="state-image-counter-2">
                    <!-- Counter Box Image Start -->
                    <div class="counter-box counter-image wow fadeInUp" data-wow-delay="0.75s">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/counter-img-2.jpg') }}" alt="Nordicsiffran">
                        </figure>
                    </div>
                    <!-- Counter Box Image End -->

                    <!-- Counter Box Start -->
                    <div class="counter-box wow fadeInUp" data-wow-delay="1s">
                        <div class="counter-content">
                            <h3><span class="counter">9870</span>+</h3>
                            <p>Hours Saved for Our Clients through Streamlined Processes</p>
                        </div>
                    </div>
                    <!-- Counter Box End -->

                    <!-- Counter Box Image Start -->
                    <div class="counter-box counter-image wow fadeInUp" data-wow-delay="1.25s">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/counter-img-3.jpg') }}" alt="Nordicsiffran">
                        </figure>
                    </div>
                    <!-- Counter Box Image End -->
                </div>
                <!-- State Image Counter End -->
            </div>
        </div>
    </div>
</div>