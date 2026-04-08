<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="about-us">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">about us</h3>
                    <h2 class="text-anime-style-3">Your trusted partner in accounting solutions</h2>
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
            <div class="col-lg-12">
                <!-- About Video Image Start -->
                <div class="about-video-image">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <figure class="image-anime reveal">
                            <img src="images/about-us-img.jpg" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- About Video Btn Start -->
                    <div class="about-video-btn">
                        <div class="icon-box">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"><i class="fa-solid fa-play"></i>play video</a>
                        </div>
                    </div>
                    <!-- About Video Btn End -->
                </div>
                <!-- About Video Image End -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <!-- About Company Item Start -->
                <div class="about-company-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-about-company-1.svg') }}" alt="Noricsiffran">
                    </div>
                    <div class="about-company-content">
                        <p>We prioritize building long-term relationships with our clients and always put their needs first.</p>
                    </div>
                </div>
                <!-- About Company Item End -->
            </div>

            <div class="col-md-4">
                <!-- About Company Item Start -->
                <div class="about-company-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-about-company-2.svg') }}" alt="Noricsiffran">
                    </div>
                    <div class="about-company-content">
                        <p>Every client is unique, and we tailor our services to fit your individual circumstances and goals.</p>
                    </div>
                </div>
                <!-- About Company Item End -->
            </div>

            <div class="col-md-4">
                <!-- About Company Item Start -->
                <div class="about-company-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{ Vite::asset('resources/images/icon-about-company-3.svg') }}" alt="Noricsiffran">
                    </div>
                    <div class="about-company-content">
                        <p>We leverage cutting-edge technology and software to streamline processes.</p>
                    </div>
                </div>
                <!-- About Company Item End -->
            </div>
        </div>
    </div>
</div>