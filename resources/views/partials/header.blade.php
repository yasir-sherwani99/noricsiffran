<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/loader-N-3.svg') }}" alt="Nordicsiffran" style="width: 38px; 39px;" />
                    ordicsiffran
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('buttons.home') }}</a>
                            </li>                                
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">{{ __('buttons.about_us') }}</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">{{ __('buttons.services') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">{{ __('buttons.pricing') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('automation') }}">{{ __('buttons.automation') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">{{ __('buttons.contact_us') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">{{ __('buttons.faqs') }}</a></li>
                            <livewire:language-switcher-mobile />                                          
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn">
                        <livewire:language-switcher />
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