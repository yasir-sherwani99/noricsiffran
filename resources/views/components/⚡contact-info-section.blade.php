<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="{{ Vite::asset('resources/images/location-img.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="{{ Vite::asset('resources/images/icon-location.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="contact-info-content">
                            <p>{{ __('messages.contact_location') }}</p>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-md-4">
                <!-- Contact Info Item Start -->
                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Contact Image Start -->
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="{{ Vite::asset('resources/images/email-img.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- Contact Image End -->
                    
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="{{ Vite::asset('resources/images/icon-email.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="contact-info-content">
                            <p><a href="#">norvia.moneta.finans@hotmail.com</a></p>
                        </div>
                    </div>
                    <!-- Contact Info Box End -->
                </div>
                <!-- Contact Info Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Info Item Start -->
                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Contact Image Start -->
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="{{ Vite::asset('resources/images/phone-img.jpg') }}" alt="Noricsiffran" />
                        </figure>
                    </div>
                    <!-- Contact Image End -->
                    
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="{{ Vite::asset('resources/images/icon-phone.svg') }}" alt="Noricsiffran" />
                        </div>
                        <div class="contact-info-content">
                            <p><a href="#">(+46) 70 775 07 02</a></p>
                        </div>
                    </div>
                    <!-- Contact Info Box End -->
                </div>
                <!-- Contact Info Item End -->
            </div>
        </div>
    </div>
</div>