<div>
    <!-- page header start -->
	<livewire:page-header-section title="{{ __('buttons.contact_us') }}" page="{{ __('buttons.contact_us') }}" />
	<!-- page header end -->

    <!-- contact information section start -->
	<livewire:contact-info-section />
    <!-- contact information section end -->

    <!-- contact us section start -->
    <livewire:contact-form-section />
    <!-- contact us section end -->

    <!-- location map section start -->
    {{-- <livewire:location-map-section /> --}}
    <!-- location map section end -->
</div>

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
