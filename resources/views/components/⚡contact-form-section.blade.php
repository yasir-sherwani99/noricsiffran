<?php

use Livewire\Component;

use App\Models\Inquiry;
use App\Mail\ContactFormMail;
// use App\Rules\RecaptchaRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public string $first_name = "";
    public string $last_name = "";
    public string $email = "";
    public string $phone = "";
    public string $message = "";
    public string $recaptchaToken = "";

    public function rules()
    {
        return [
            'first_name' => 'required|string|min:1|max:50',
            'last_name' => 'required|string|min:1|max:50',
            'email' => 'required|email|max:100',
            'phone' => 'required',
            'message' => 'required|min:10|max:5000',
            'recaptchaToken' => 'required',
         //   'terms' => 'required|accepted'
        ];
    }

    // Custom validation messages
    protected $messages = [
        'first_name.required' => 'Please enter your first name.',
        'first_name.min' => 'First name must be at least 1 characters.',
        'first_name.max' => 'First name must be at most 50 characters.',
        'last_name.required' => 'Please enter your last name.',
        'last_name.min' => 'Last name must be at least 1 characters.',
        'last_name.max' => 'Last name must be at most 50 characters.',
        'email.required' => 'Email address is required.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Message cannot be empty.',
        'message.min' => 'Message must be at least 10 characters.',
        'message.max' => 'Message must be at most 5000 characters.',
        'recaptchaToken.required' => 'Please verify that you are not a robot.',
        // 'terms.accepted' => 'You must accept the terms and conditions.',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        
        // Log the token for debugging
        Log::info('reCAPTCHA Token received', ['token' => $this->recaptchaToken]);
        
        // Verify with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $this->recaptchaToken,
            'remoteip' => request()->ip(),
        ]);

        $result = $response->json();

         // Log the response for debugging
        Log::info('reCAPTCHA Response', ['response' => $result]);
        
         // Detailed error checking
        if (!$result['success']) {
            $errorCodes = $result['error-codes'] ?? [];
            $errorMessage = 'reCAPTCHA verification failed. ';
            
            foreach ($errorCodes as $code) {
                switch ($code) {
                    case 'missing-input-secret':
                        $errorMessage .= 'Secret key is missing. ';
                        break;
                    case 'invalid-input-secret':
                        $errorMessage .= 'Secret key is invalid. ';
                        break;
                    case 'missing-input-response':
                        $errorMessage .= 'Response token is missing. ';
                        break;
                    case 'invalid-input-response':
                        $errorMessage .= 'Response token is invalid or expired. ';
                        break;
                    case 'bad-request':
                        $errorMessage .= 'Bad request to Google API. ';
                        break;
                    case 'timeout-or-duplicate':
                        $errorMessage .= 'Token timeout or duplicate. ';
                        break;
                    default:
                        $errorMessage .= $code . '. ';
                }
            }
            
            $this->addError('recaptchaToken', $errorMessage);
            return;
        }

        Inquiry::create($validatedData);
        
        // Mail::to('yasirsherwani@hotmail.com')->send(
        //     new ContactFormMail($validatedData)
        // );
         // Send email with try-catch
            try {
                Mail::to('yasirsherwani@hotmail.com')->send(
                    new ContactFormMail($validatedData)
                );
                
                // Log success
                Log::info('Contact form email sent successfully', ['email' => $this->email]);
                
                // Reset form on success
                $this->reset();
                
                // Reset reCAPTCHA widget
                $this->dispatch('recaptcha-reset');
                
                // Show success message
                session()->flash('success', __('messages.success_msg'));
                
            } catch (\Exception $e) {
                // Log the error for debugging
                Log::error('Failed to send contact form email: ' . $e->getMessage());
                Log::error('Email error details: ' . $e->getTraceAsString());
                
                // Show user-friendly error message
                session()->flash('error', 'Sorry, we could not send your message at this time. Please try again later.');
                $this->addError('email', 'Failed to send message. Please try again.');
            }

       // $this->reset();

       // session()->flash('success', __('messages.success_msg'));
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
                                @error('first_name')
                                    <div class="invalid-feedback text-start ps-2">{{ $message }}</div>
                                @enderror
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
                                @error('last_name')
                                    <div class="invalid-feedback text-start ps-2">{{ $message }}</div>
                                @enderror
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
                                @error('email')
                                    <div class="invalid-feedback text-start ps-2">{{ $message }}</div>
                                @enderror
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
                                @error('phone')
                                    <div class="invalid-feedback text-start ps-2">{{ $message }}</div>
                                @enderror
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
                                @error('message')
                                    <div class="invalid-feedback text-start ps-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="d-flex justify-content-center"> 
                                    <div wire:ignore>
                                        <div class="g-recaptcha"
                                            data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                            data-callback="onRecaptchaSuccess"
                                            data-expired-callback="onRecaptchaExpired"
                                            data-error-callback="onRecaptchaError"
                                        >
                                        </div>
                                    </div>
                                </div>
                                @error('recaptchaToken')
                                    <div class="d-flex justify-content-center">
                                        <div class="text-danger small">{{ $message }}</div>
                                    </div>
                                @enderror
                            </div>

                            <input type="hidden" wire:model="recaptchaToken" id="recaptchaToken">

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

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        window.onRecaptchaSuccess = function(token) {
            @this.set('recaptchaToken', token);
        }
        
        window.onRecaptchaExpired = function() {
            @this.set('recaptchaToken', '');
        }
        
        window.onRecaptchaError = function() {
            @this.set('recaptchaToken', '');
        }
    </script>
@endpush