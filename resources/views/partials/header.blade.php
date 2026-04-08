<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Noricsiffran" />
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>                                
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About us</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">services</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">pages</a>
                                <ul>                                        
                                    <li class="nav-item"><a class="nav-link" href="service-single.html">service details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.html">blog details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="faqs.html">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="#">Book Now</a></li>                               
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="#" class="btn-default">book now</a>
                    </div>
                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>