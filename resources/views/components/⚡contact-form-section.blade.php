<?php

use Livewire\Component;

use App\Models\Inquiry;

new class extends Component
{
    public string $first_name = "";
    public string $last_name = "";
    public string $email = "";
    public string $phone = "";
    public string $message = "";

    public function submit()
    {
        $validated = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|min:10',
        ]);

        Inquiry::create($validated);

        $this->reset();

        session()->flash('success', __('messages.success_msg'));
    }
};
?>

<div class="contact-us light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ __('messages.get_in_touch') }}</h3>
                    <h2 class="text-anime-style-3">{{ __('messages.contact_heading') }}</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>{{ __('messages.contact_text') }}.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                 @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <i class="fa-solid fa-check-double me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Contact Form Start -->
                <div class="contact-form wow fadeInUp" data-wow-delay="0.25s">
                    <form id="contactForm" wire:submit.prevent="submit" data-toggle="validator">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input 
                                    type="text" 
                                    wire:model.live="first_name" 
                                    class="form-control @error('first_name') is-invalid @enderror" 
                                    id="first_name" 
                                    placeholder="{{ __('messages.first_name') . '*' }}" 
                                    {{-- required --}}
                                />
                                {{-- <div class="help-block with-errors"></div> --}}
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input 
                                    type="text" 
                                    wire:model.live="last_name" 
                                    class="form-control @error('last_name') is-invalid @enderror" 
                                    id="last_name" 
                                    placeholder="{{ __('messages.last_name') . '*' }}" 
                                    {{-- required="" --}}
                                />
                                {{-- <div class="help-block with-errors"></div> --}}
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input 
                                    type="email" 
                                    wire:model.live="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" 
                                    placeholder="{{ __('messages.email') . '*' }}" 
                                    {{-- required="" --}}
                                />
                                {{-- <div class="help-block with-errors"></div> --}}
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input 
                                    type="text" 
                                    wire:model.live="phone" 
                                    class="form-control @error('phone') is-invalid @enderror" 
                                    id="phone" 
                                    placeholder="{{ __('messages.phone') . '*' }}" 
                                    {{-- required="" --}}
                                />
                                {{-- <div class="help-block with-errors"></div> --}}
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <textarea 
                                    wire:model.live="message" 
                                    class="form-control @error('message') is-invalid @enderror" 
                                    id="message" 
                                    rows="7" 
                                    placeholder="{{ __('messages.message') . '*' }}" 
                                    {{-- required="" --}}
                                >
                                </textarea>
                                {{-- <div class="help-block with-errors"></div> --}}
                            </div>

                            <div class="col-md-12 mb-4 d-flex justify-content-center align-items-center">
                                 <div wire:ignore>
                                    <div class="g-recaptcha"
                                        data-sitekey="{{ config('services.recaptcha.site_key') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-default">
                                     <!-- Shows during submission -->
                                    <span wire:loading wire:target="submit">
                                        <span class="spinner-border spinner-border-sm me-1"></span>
                                        {{ __('buttons.submitting') . '...' }}
                                    </span>
                                    
                                    <!-- Shows when not submitting -->
                                    <span wire:loading.remove wire:target="submit">
                                        {{ __('buttons.submit') }}
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            document.getElementById('contactForm').addEventListener('submit', function (e) {
                e.preventDefault();

                if (!this.checkValidity()) {
                    this.classList.add('was-validated');
                    return;
                }

                Livewire.dispatch('contactForm');
            });

        });
    </script>
@endpush --}}