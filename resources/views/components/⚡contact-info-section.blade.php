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
                            <img src="{{ asset('assets/images/new/address-img.jpg') }}" alt="Nordicsiffran" />
                        </figure>
                    </div>
                    
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-location.svg') }}" alt="Nordicsiffran" />
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
                            <img src="{{ asset('assets/images/new/email-img.jpg') }}" alt="Nordicsiffran" />
                        </figure>
                    </div>
                    <!-- Contact Image End -->
                    
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-email.svg') }}" alt="Nordicsiffran" />
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
                            <img src="{{ asset('assets/images/new/phone-img.jpg') }}" alt="Nordicsiffran" />
                        </figure>
                    </div>
                    <!-- Contact Image End -->
                    
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="Nordicsiffran" />
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