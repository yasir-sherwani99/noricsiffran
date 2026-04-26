<div>
    <!-- page header start -->
	<livewire:page-header-section title="{{ __($service['name']) }}" page="{{ __($service['name']) }}" />
	<!-- page header end -->

    <!-- single service page start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- service content start -->
                    <livewire:single-service-section :service="$service" />
                    <!-- service content end -->

                    <!-- service summary start -->
                    <livewire:service-summary-section />
                    <!-- service summary end -->
                </div>
                <div class="col-lg-4">
                    <!-- service sidebar start -->
                    <div class="service-sidebar">
                        <!-- services list start -->
                        <livewire:services-list-section :services="$services" />
                        <!-- services list end -->
                        <!-- sidebar cta box start -->
                        <livewire:sidebar-cta-section />
                        <!-- sidebar cta box end -->
                    </div>
                    <!-- service sidebar end -->
                </div>
            </div>
        </div>
    </div>
    <!-- single service page end -->
</div>
        
