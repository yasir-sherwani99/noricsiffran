<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.5s">
    <!-- Sidebar Cta Image Start -->
    <div class="sidebar-cta-image">
        <figure class="image-anime">
            <img src="{{ Vite::asset('resources/images/service-cta-bg.jpg') }}" alt="Noricsiffran" />
        </figure>
    </div>
    <!-- Sidebar Cta Image End -->
    
    <!-- Sidebar Cta Content Start -->
    <div class="sidebar-cta-content">    
        <h3>Need Help? We Are Here To Help You</h3>
        <a href="{{ route('contact') }}" class="btn-default btn-highlighted">contact us</a>
    </div>
    <!-- Sidebar Cta Content End -->
</div>