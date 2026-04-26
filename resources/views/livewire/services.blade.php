<div>
    <!-- page header start -->
	<livewire:page-header-section title="{{ __('services.services') }}" page="{{ __('services.services') }}" />
	<!-- page header end -->

    <!-- our services start -->
    <livewire:services-section :services="$services" />
    <!-- our services end -->

    <!-- cta box section start -->
    <livewire:cta-box-section />
    <!-- cta box section end -->

    <!-- why choose us section start -->
    <livewire:why-choose-us-section />
    <!-- why choose us section end -->

    <!-- our clients section start -->
    {{-- <livewire:clients-section /> --}}
    <!-- our clients section end -->
</div>
