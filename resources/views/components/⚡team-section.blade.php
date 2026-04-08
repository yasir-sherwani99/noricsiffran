<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="our-team">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our team</h3>
                    <h2 class="text-anime-style-3">Meet the accountants expert</h2>
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
            <div class="col-lg-4 col-md-6">
                <!-- Team Member Item Start -->
                <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Team Img Start -->
                    <div class="team-image">
                        <figure>
                            <img src="{{ Vite::asset('resources/images/team-1.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- Team Img End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <div class="team-content">
                            <h3>john doe</h3>
                            <p>(Founder & CEO)</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Member Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Team Member Item Start -->
                <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Team Img Start -->
                    <div class="team-image">
                        <figure>
                            <img src="{{ Vite::asset('resources/images/team-2.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- Team Img End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <div class="team-content">
                            <h3>arita banson</h3>
                            <p>(management accountant)</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Member Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Team Member Item Start -->
                <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Team Img Start -->
                    <div class="team-image">
                        <figure class="image-anime"> 
                            <img src="{{ Vite::asset('resources/images/team-3.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- Team Img End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <div class="team-content">
                            <h3>banson doe</h3>
                            <p>(financial analyst)</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Member Item End -->
            </div>
        </div>
    </div>
</div>