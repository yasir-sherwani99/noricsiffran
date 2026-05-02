<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer About Start -->
                <div class="footer-about">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="{{ Vite::asset('resources/images/loader-N-4.svg') }}" alt="Nordicsiffran" style="width: 38px; 39px;" /> 
                                ordicsiffran
                            </div>
                            <!-- Footer Logo End -->
                        </div>

                        <div class="col-lg-8">
                            <!-- Footer Title Start -->
                            <div class="footer-title">
                                <h2>{{ __('messages.footer_text') }}</h2>
                            </div>
                            <!-- Footer Title End -->
                        </div>
                    </div>
                </div>
                <!-- Footer End Start -->

                <!-- Footer Body Start -->
                <div class="footer-body">
                    <div class="row">
                        <div class="col-lg-4">
                        </div>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <!-- Footer Links Start -->
                                    <div class="footer-links">
                                        <h2>{{ __('messages.quick_links') }}</h2>
                                        <ul>
                                            <li><a href="{{ route('about') }}">{{ __('buttons.about_us') }}</a></li>
                                            <li><a href="{{ route('services') }}">{{ __('buttons.services') }}</a></li>
                                            <li><a href="{{ route('automation') }}">{{ __('buttons.automation') }}</a></li>
                                            <li><a href="{{ route('contact') }}">{{ __('buttons.contact_us') }}</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Links End -->
                                </div>
    
                                <div class="col-md-4 col-6">
                                    <!-- Footer Links Start -->
                                    <div class="footer-links">
                                        <h2>{{ __('messages.socials') }}</h2>
                                        <ul>
                                            <li><a href="#">instagram</a></li>
                                            <li><a href="#">facebook</a></li>
                                            <li><a href="#">twitter</a></li>
                                            <li><a href="#">linkedin</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Links End -->
                                </div>

                                <div class="col-md-4">
                                    <!-- Footer Contact Start -->
                                    <div class="footer-contact">
                                        <h2>{{ __('messages.say_hello') }}</h2>
                                        <ul>
                                            <li><a href="#">norvia.moneta.finans@hotmail.com</a></li>
                                            <li><a href="#">(+46) 70 775 07 02</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Contact End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Body End -->

                <!-- Copyright Footer Start -->
                <div class="footer-copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <!-- Footer Copyright Content Start -->
                            <div class="footer-copyright-text">
                                <p>{{ __('messages.copyright') }} © {{ date('Y') }} nordicsiffran. {{ __('messages.rights') }}.</p>
                            </div>
                            <!-- Footer Copyright Content End -->
                        </div>
                    </div>						
                </div>
                <!-- Copyright Footer End -->
            </div>
        </div>
    </div>
</footer>