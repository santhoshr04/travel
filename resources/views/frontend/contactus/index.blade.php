@extends('layouts.app')

@section('js')
<!-- Google reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        let submitBtn = document.getElementById("submitBtn");
        let btnText = document.getElementById("btnText");
        let loadingSpinner = document.getElementById("loadingSpinner");

        // Check if reCAPTCHA is completed
        var recaptchaResponse = grecaptcha.getResponse();
        if (recaptchaResponse.length === 0) {
            alert("Please complete the CAPTCHA.");
            event.preventDefault();  // Prevent form submission
            return;
        }

        // Disable the button and show loading spinner
        submitBtn.disabled = true;
        btnText.textContent = "Sending...";
        loadingSpinner.classList.remove("d-none");
    });
</script>
@endsection

@section('content')
<section class="banner-section pt-4" style="height : 40vh;">
    <div class="pt-4">
        <div class="banner-element aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('element-1.png') }}" alt="element">
        </div>
        <div class="banner-element-two">
            {{-- <img src="assets/images/element/element-3.png" alt="element"> --}}
        </div>
        <div class="banner-element-three">
            {{-- <img src="assets/images/element/element-4.png" alt="element"> --}}
        </div>
        <div class="banner-element-four">
            {{-- <img src="assets/images/element/element-5.png" alt="element"> --}}
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 pt-4">
                    <div class="banner-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1800">
                        <span class="sub-title"></span>
                        <h1 class="title"><span>Contact </span><span style="color: #dcbb87;">Us</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
{{-- TODO update the site key --}}
<section class="contact-section bg--gray ptb-120" id="contact">
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <!-- Left Side Content -->
            <div class="col-xl-5 col-lg-5 mb-30">
                <div class="contact-left-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                    <span class="sub-title">Are you a pilot?</span>
                    <h2 class="title">Login to iCrew™ and Check Our FAQ Section</h2>
                    <p>99% of the time, you will find what you're looking for in our FAQ section.</p>
                    <ul class="contact-social">
                        <li><a href="https://discord.gg/769zjcwQk8" target="_blank"><i class="fab fa-discord"></i></a></li>
                        <li><a href="https://www.facebook.com/simairforce" target="_blank" class="active"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Right Side Form -->
            <div class="col-xl-7 col-lg-7 mb-30">
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="contact-form-inner aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                    <div class="contact-form-area">
                        <form id="contactForm" role="form" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input class="form--control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" type="text" value="{{ old('name') }}">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <input class="form--control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email" value="{{ old('email') }}">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form--control @error('message') is-invalid @enderror" name="message" rows="4" placeholder="Enter Message">{{ old('message') }}</textarea>
                                @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                
                            {{-- <div class="mt-3 d-flex justify-content-center">
                                <!-- Google reCAPTCHA -->
                                <div class="g-recaptcha" data-sitekey="6Lc9KUcoAAAAANy4ghY3zlMB90PzMxTR7Ii0p_GH" required></div>
                            </div>
                 --}}
                            <button id="submitBtn" class="btn--base btn-lg w-100 mt-4 shadow-sm" type="submit">
                                <span id="btnText">Send Now!</span>
                                <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection