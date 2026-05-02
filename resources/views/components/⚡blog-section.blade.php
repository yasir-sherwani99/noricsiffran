<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our blog</h3>
                    <h2 class="text-anime-style-3">Uncover our latest posts and updates</h2>
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
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ Vite::asset('resources/images/post-1.jpg') }}" alt="Nordicsiffran" /></a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- post Item Body Start -->
                    <div class="post-item-body">
                        <h2><a href="#">Understanding Tax Deductions for Small Businesses</a></h2>                            
                        <p>financial statements, their interpretation, and finance as well as business analysis techniques and accounting practices.</p>
                    </div>
                    <!-- Post Item Body End-->

                    <!-- Post Item Footer Start-->
                    <div class="post-item-footer">
                        <a href="#" class="btn-default">read more</a>
                    </div>
                    <!-- Post Item Footer End-->
                </div>
                <!-- Blog Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ Vite::asset('resources/images/post-2.jpg') }}" alt="Nordicsiffran" /></a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- post Item Body Start -->
                    <div class="post-item-body">
                        <h2><a href="#">Top 10 Accounting Software Solutions for 2024</a></h2>                            
                        <p>This could include articles on personal finance as well as financial statements, their interpretation business finance.</p>
                    </div>
                    <!-- Post Item Body End-->

                    <!-- Post Item Footer Start-->
                    <div class="post-item-footer">
                        <a href="#" class="btn-default">read more</a>
                    </div>
                    <!-- Post Item Footer End-->
                </div>
                <!-- Blog Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ Vite::asset('resources/images/post-3.jpg') }}" alt="Nordicsiffran" /></a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- post Item Body Start -->
                    <div class="post-item-body">
                        <h2><a href="#">Managing Cash Flow: Tips for Maintaining Healthy Finances</a></h2>                            
                        <p>discussions on emerging could include articles on personal in the accounting field, and accounting practices.</p>
                    </div>
                    <!-- Post Item Body End-->

                    <!-- Post Item Footer Start-->
                    <div class="post-item-footer">
                        <a href="#" class="btn-default">read more</a>
                    </div>
                    <!-- Post Item Footer End-->
                </div>
                <!-- Blog Item End -->
            </div>
        </div>
    </div>
</div>