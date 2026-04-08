<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="client-testimonials">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <div class="client-testimonials-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-3">Real stories of success and satisfaction</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Section Body Start -->
                    <div class="section-body">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="0.5s">contact us</a>
                    </div>
                    <!-- Section Body Btn End -->
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">	
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ Vite::asset('resources/images/author-1.jpg') }}" alt="Noricsiffran" />
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h2>john doe</h2>
                                            <p>(customer)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard .</p>									
                                    </div>													
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                            
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">	
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ Vite::asset('resources/images/author-2.jpg') }}" alt="Noricsiffran" />
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h2>banson doe</h2>
                                            <p>(CEO)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard .</p>									
                                    </div>													
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">	
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ Vite::asset('resources/images/author-3.jpg') }}" alt="Noricsiffran" />
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h2>arita banson</h2>
                                            <p>(employee)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard .</p>									
                                    </div>													
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                        </div>
                        <div class="hero-button-prev"></div>
                        <div class="hero-button-next"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>