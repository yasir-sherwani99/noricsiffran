<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="page-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- FAQs Sidebar Start -->
                <div class="faq-sidebar">
                    <!-- Faqs Category Box Start -->
                    <div class="faq-category-box wow fadeInUp">
                        <ul>
                            <li><a href="#faq-1">{{ __('faq.faq') }}</a></li>
                        </ul>
                    </div>
                    <!-- Faqs Category Box End -->
                </div>
                <!-- FAQs Sidebar End -->
            </div>
            
            <div class="col-lg-8">
                <!-- FAQs section start -->
                <div class="faq-section" id="faq-1">
                    <div class="our-faqs-title">
                        <h2 class="text-anime-style-3">{{ __('faq.faq') }}</h2>
                    </div>
                    
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion">
                        <div class="accordion" id="faq_accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">{{ __('faq.faq_1') }}?</button></h2>
                                
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_1_ans') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">{{ __('faq.faq_2') }}?</button></h2>

                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_2_ans') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">{{ __('faq.faq_3') }}?</button></h2>

                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_3_ans') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading4"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">{{ __('faq.faq_4') }}?</button></h2>

                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_4_text') }}:</p>
                                        <ul>
                                            <li>{{ __('faq.faq_4_pt_1') }}</li>
                                            <li>{{ __('faq.faq_4_pt_2') }}</li>
                                            <li>{{ __('faq.faq_4_pt_3') }}</li>
                                            <li>{{ __('faq.faq_4_pt_4') }}</li>
                                            <li>{{ __('faq.faq_4_pt_5') }}</li>
                                            <li>{{ __('faq.faq_4_pt_6') }}</li>
                                        </ul>
                                        <p>{{ __('faq.faq_4_ans') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">{{ __('faq.faq_5') }}?</button></h2>

                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_5_ans') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading6"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">{{ __('faq.faq_6') }}?</button></h2>

                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_6_ans') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading7"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">{{ __('faq.faq_7') }}?</button></h2>

                                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('faq.faq_7_ans') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                        </div>
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
                <!-- FAQs section end -->
            </div>
        </div>
    </div>
</div>