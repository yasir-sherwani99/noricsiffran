<?php

use Livewire\Component;

new class extends Component
{
    public $packages;
};
?>

<div class="page-pricing">
    <div class="container">
        <div class="row">
            @foreach ($packages as $key => $package)
                <?php
                    if($key === 0) {
                        $seconds = 0.25;
                    } elseif ($key === 1) {
                        $seconds = 0.5;
                    } else {
                        $seconds = 0.75;
                    }
                ?>
                <div class="col-lg-4">
                    <!-- Pricing Box Start -->
                    <div 
                        class="{{ $key == 1 ? 'pricing-box highlighted-box wow fadeInUp' : 'pricing-box wow fadeInUp' }}" 
                        data-wow-delay="{{ $seconds . 's' }}"
                    >
                        <!-- Pricing Box Header Start -->
                        <div class="pricing-box-header">
                            <div class="pricing-box-title">
                                <h2><sup>SEK</sup>{{ $package['price'] }}<sub>/{{ __('pricing.month') }}</sub></h2>
                            </div>
                            <div class="pricing-box-content">
                                <h3>{{ __($package['name']) . ' ' . __('pricing.package') }}</h3>
                                <p>{{ __($package['text']) }}</p>
                            </div>
                        </div>
                        <!-- Pricing Box Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-box-body">
                            @if(count($package['features']) > 0)
                                <ul>
                                    @foreach ($package['features'] as $feature)
                                        <li>{{ __($feature) }}</li>    
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Box Footer Start -->
                        <div class="pricing-box-footer">
                            <a 
                                href="{{ route('contact') }}" 
                                class="{{ $key == 1 ? 'btn-default btn-highlighted' : 'btn-default' }}"
                            >
                                contact now
                            </a>
                        </div>
                        <!-- Pricing Box Footer End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>
            @endforeach
        </div>
    </div>
</div>