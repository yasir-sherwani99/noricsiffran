<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="customer-Benefit">
    <div class="row align-items-center mt-5">
        <div class="col-md-6">
            <!-- Summary Image Start -->
            <div class="customer-benefit-image">
                <figure class="image-anime reveal">
                    <img src="{{ asset('assets/images/customer-benefit-img.jpg') }}" alt="Nordicsiffran" />
                </figure>
            </div>
            <!-- Summary Image End -->
        </div>
        <div class="col-md-6">
            <!-- Summary Content Start -->
            <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                <h3>{{ __('services.summary') }}</h3>
                <p>{{ __('services.summary_text') }}.</p>
                <ul>
                    <li>{{ __('services.summary_pt_1') }}</li>
                    <li>{{ __('services.summary_pt_2') }}</li>
                    <li>{{ __('services.summary_pt_3') }}</li>
                    <li>{{ __('services.summary_pt_4') }}</li>
                </ul>
            </div>
            <!-- Summary Content End -->
        </div>
    </div>
</div>