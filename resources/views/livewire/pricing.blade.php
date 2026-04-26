<div>
    <!-- page header start -->
	<livewire:page-header-section title="{{ __('buttons.pricing') }}" page="{{ __('buttons.pricing') }}" />
	<!-- page header end -->

    <!-- page pricing start -->
	<livewire:pricing-packages-section :packages="$packages" />
    <!-- page pricing start -->
</div>
