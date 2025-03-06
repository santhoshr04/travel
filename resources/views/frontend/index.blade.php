@extends('layouts.app')

@section('css')
<style>
    .step-number-big {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        font-weight: bold;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        /* Ensures it appears above the card */
    }

    .card {
        padding-top: 40px;
        /* Adjust padding to accommodate the circle */
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection
@section('content')
{{-- Start Banner --}}
<section class="banner-section pt-4" style="height : 110vh;">
    <div class="pt-4">
        <div class="banner-element aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('element-1.png') }}" alt="element">
        </div>
        <div class="banner-element-two">
            {{-- <img src="{{ asset('element-4.png') }}" alt="element"> --}}
        </div>
        <div class="banner-element-three">
            <img src="{{ asset('element-5.png') }}" alt="element">
        </div>
        <div class="banner-element-four">
            <img src="{{ asset('element-4.png') }}" alt="element">
        </div>
        <div class="banner-social-area">
            <ul class="banner-social">
                <li><a href="https://www.facebook.com/simairforce"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://discord.gg/769zjcwQk8"><i class="fab fa-discord"></i></a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center ">
                <div class="col-xxl-5 col-xl-6 col-lg-12 pt-4">
                    <div class="banner-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1800">
                        <span class="sub-title"></span>
                        <h1 class="title"><span>Welcome to </span><span style="color: #dcbb87;">Simulated United States
                                Air Force</span></h1>
                        <p>The Simulated United States Air Force replicates U.S. Air Force operations with civilians, active officers, aviation enthusiasts, and analysts, creating a realistic environment enhanced by platforms like VATSIM and IVAO.</p>
                        <div class="">
                            <a href="https://icrew.simairforce.com/index.php/registration" target="_balank" class="btn--base"><i class="fas fa-chevron-right mr-2"></i> Register Now</a>
                            <a href="https://icrew.simairforce.com/index.php/login" target="_balank" class="btn--base active">Login <i class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6">
                    <div class="banner-thumb">
                        <img src="{{ asset('element-7.png') }}" alt="element">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Banner --}}

{{-- Start Scroll-To-Top --}}
<a href="#" class="scrollToTop active">
    <i class="las la-dot-circle"></i>
    <span>Top</span>
</a>
{{-- End Scroll-To-Top --}}

{{-- Start Call-widget --}}
<div class="overview-section ptb-120">
    <div class="container-fluid">
        <div class="overview-area">
            <div class="overview-element aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                {{-- <img src="assets/images/element/element-6.png" alt="Decorative Element" loading="lazy"> --}}
            </div>
            <div class="overview-tab">
                <nav>
                    <div class="overview-tab-thumb aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                        <img src="{{ asset('istockphoto.jpg') }}" alt="Overview thumbnail" loading="lazy">
                        <div class="nav-tab-area">
                            <div class="nav-tab-header">
                                <h2 class="title">Find the Best Service For You</h2>
                            </div>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link" id="private-jet-tab" data-toggle="tab" data-target="#private-jet" type="button" role="tab" aria-controls="private-jet" aria-selected="true">
                                    <span>01</span> Exceptional Training
                                </button>
                                <button class="nav-link active" id="business-jet-tab" data-toggle="tab" data-target="#business-jet" type="button" role="tab" aria-controls="business-jet" aria-selected="false">
                                    <span>02</span> Exciting Missions
                                </button>
                                <button class="nav-link" id="private-helicopter-tab" data-toggle="tab" data-target="#private-helicopter" type="button" role="tab" aria-controls="private-helicopter" aria-selected="false">
                                    <span>03</span> Vibrant Community
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="tab-content aos-init aos-animate" id="nav-tabContent" data-aos="fade-right" data-aos-duration="1200">
                    <div class="tab-pane fade" id="private-jet" role="tabpanel" aria-labelledby="private-jet-tab">
                        <div class="overview-item">
                            <div class="overview-thumb" style="position: relative;">
                                <img src="{{ asset('Service1.png') }}" alt="Exceptional Training Service" style="width: auto; height: 363px; object-fit: cover;" loading="lazy">
                                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
                                <div class="overview-thumb-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                                    <i class="fa fa-school fa-4x mb-3" style="color: white;" aria-hidden="true"></i>
                                    <h3 class="title"><a href="service-details.html">Exceptional Training</a></h3>
                                    <p>Get top-tier training to enhance your skills and knowledge.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="business-jet" role="tabpanel" aria-labelledby="business-jet-tab">
                        <div class="overview-item">
                            <div class="overview-thumb" style="position: relative;">
                                <img src="{{ asset('Service2.png') }}" alt="Exciting Business Missions Service" style="width: auto; height: 363px; object-fit: cover;" loading="lazy">
                                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
                                <div class="overview-thumb-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                                    <i class="fa fa-fighter-jet fa-4x mb-3" style="color: white;" aria-hidden="true"></i>
                                    <h3 class="title"><a href="service-details.html">Exciting Missions</a></h3>
                                    <p>Join thrilling missions and take on exciting challenges.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="private-helicopter" role="tabpanel" aria-labelledby="private-helicopter-tab">
                        <div class="overview-item">
                            <div class="overview-thumb" style="position: relative;">
                                <img src="{{ asset('Service3.png') }}" alt="Vibrant Community Service" style="width: auto; height: 363px; object-fit: cover;" loading="lazy">
                                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
                                <div class="overview-thumb-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                                    <i class="fa fa-users fa-4x mb-3" style="color: white;" aria-hidden="true"></i>
                                    <h3 class="title"><a href="service-details.html">Vibrant Community</a></h3>
                                    <p>Connect with passionate individuals in a thriving community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
{{-- END Call-widget --}}

{{-- START About --}}

<section class="about-section bg-overlay-base ptb-120 bg_img" data-background="{{ asset('T38.png') }}"
    style="background-image: url(&quot;{{ asset('T38.png') }}&quot;);">
    <div class="about-element">
        <img src="{{ asset('element-9.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-7 col-lg-7 mb-30">
                <div class="about-content">
                    <span class="sub-title"><span>About</span> Us</span>
                    <h2 class="title">Enhancing the Pilot Experience with Innovation and Realism</h2>
                    <p>We provide a unique pilot experience by bringing together a strong, friendly community, advanced software, 
                        and realistic policies and procedures. Our approach strikes a balance between realism and simulation, 
                        ensuring an immersive yet accessible experience.</p>
                    <p>Our constant innovation is driven by monthly town hall meetings, where we discuss new features and 
                        address pilot concerns. This collaborative effort results in an ever-evolving system designed to 
                        continuously improve the pilot experience.</p>
                    <div class="pt-2">
                        <a href="{{ route('about.index') }}" class="btn--base"><i class="fas fa-chevron-right mr-2"></i> For more info</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 mb-30">
            </div>
        </div>
    </div>
</section>

{{-- End About --}}

{{-- Start Feature --}}
<section class="feature-section page-wrapper-two ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header">
                    <span class="sub-title">What <span>SIMAF</span> offers</span>
                    <h2 class="section-title">Why should you choose us</h2>
                </div>
            </div>
        </div>
        <div class="feature-area">
            <div class="row justify-content-center m-0">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0 pb-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><span>Industry-leading Technology</span></h3>
                            <p>SIMAF is now integrated with iCrew v4.5 Military. Crafted by web-engineers worldwide,
                                iCrew is customized to meet all our needs as a Virtual Military Organization, accessible
                                on all devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0 pb-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Exceptional Training</h3>
                            <p>Our retired USAF Pilots provide unmatched training on both real-world concepts and the
                                skills required to operate a War Machine. Quality training that exceeds industry
                                standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0 pb-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa fa-plane-departure"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Expansive Fleet</h3>
                            <p>From Single Engine Trainer aircraft to Commercial Aircraft, Helicopters, and Bombers,
                                SIMAF offers a vast fleet for a truly diverse flying experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0 pb-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa fa-route"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Multiple Streams</h3>
                            <p>Get beyond the ordinary! Fly fighter aircraft amidst mountains, or land a helicopter on a
                                makeshift pad. The options are endless!</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0 pb-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Vibrant Community</h3>
                            <p>Students, active-duty officers, retired officers, analysts, and more are part of our
                                community. Our strength lies in our diversity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0 pb-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa fa-user-tie"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Dedicated Staff</h3>
                            <p>Our team of qualified and experienced individuals work tirelessly to provide the best
                                possible military flying experience on your simulator!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Feature --}}

{{-- Start Statistics --}}
<section class="statistics-section bg-overlay-black ptb-120 bg_img" data-background="{{ asset('NY_NY.png') }}"
    style="background-image: url(&quot;{{ asset('NY_NY.png') }}&quot;);">
    <div class="container">
        <div class="statistics-area">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="statistics-item">
                        <div class="statistics-content">
                            <div class="odo-area">
                                <h3 class="odo-title odometer odometer-auto-theme" data-odometer-final="{{ $yearsActive }}">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">2</span></span></span></span></span>
                                    </div>
                                </h3>
                            </div>
                            <p>Years Active</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="statistics-item">
                        <div class="statistics-content">
                            <div class="odo-area">
                                <h3 class="odo-title odometer odometer-auto-theme" data-odometer-final="{{ $pilotCount }}">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">2</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">9</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">9</span></span></span></span></span>
                                    </div>
                                </h3>
                            </div>
                            <p>Pilots Produced</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="statistics-item">
                        <div class="statistics-content">
                            <div class="odo-area">
                                <h3 class="odo-title odometer odometer-auto-theme" data-odometer-final="{{ $totalHours }}">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">2</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">6</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">4</span></span></span></span></span>
                                    </div>
                                </h3>
                            </div>
                            <p>Log Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="statistics-item">
                        <div class="statistics-content">
                            <div class="odo-area">
                                <h3 class="odo-title odometer odometer-auto-theme" data-odometer-final="{{ $fleetCount }}">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">4</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">5</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span>
                                    </div>
                                </h3>
                            </div>
                            <p>Fleet Strength</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call-to-Action Section -->
    <div class="text-center mt-5">
        <h4 class="text-white mb-4">Do you think you have what it takes?</h4>
        <a href="https://icrew.simairforce.com/index.php/registration" target="_blank"
            class="btn--base text-white px-4 py-3 rounded-lg shadow-lg text-uppercase fw-bold">
            Enroll now to be a part of something <span>exceptional</span>
        </a>
    </div>
</section>
{{-- End Statistics --}}

{{-- START Cockpit --}}
<section class="journey-section bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-muted fs-5">What happens when you register?</p>
            <h2 class="fw-bold display-5">The Journey to the <span style="color: #dcbb87;">Cockpit</span></h2>
        </div>
        <div class="row gy-5">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card h-100 border-0 shadow position-relative text-center p-4">
                    <div class="step-number-big text-white rounded-circle position-absolute"
                        style="background-color: #dcbb87;">
                        
                        <!-- Right Arrow for Medium & Large Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-right d-none d-md-inline" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.293 12.707a1 1 0 0 1 0-1.414L12.586 9H1a1 1 0 0 1 0-2h11.586l-2.293-2.293a1 1 0 0 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414 0z">
                            </path>
                        </svg>
            
                        <!-- Down Arrow for Small Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-down d-inline d-md-none" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 14.354a.5.5 0 0 0 .708 0l5-5a.5.5 0 1 0-.708-.708L8.5 12.793V1.5a.5.5 0 0 0-1 0v11.293L3.354 8.646a.5.5 0 1 0-.708.708l5 5z">
                            </path>
                        </svg>
            
                    </div>
                    <h5 class="fw-bold mt-5 pt-3">AirCrew Eligibility Test</h5>
                    <p class="text-muted small">
                        We recruit only the best of the best. The AirCrew Eligibility Test is an aptitude test measuring
                        the competencies necessary to be a SIMAF Pilot.
                    </p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card h-100 border-0 shadow position-relative text-center p-4">
                    <div class="step-number-big text-white rounded-circle position-absolute"
                        style="background-color: #dcbb87;">
                        
                        <!-- Right Arrow for Medium & Large Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-right d-none d-md-inline" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.293 12.707a1 1 0 0 1 0-1.414L12.586 9H1a1 1 0 0 1 0-2h11.586l-2.293-2.293a1 1 0 0 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414 0z">
                            </path>
                        </svg>
            
                        <!-- Down Arrow for Small Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-down d-inline d-md-none" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 14.354a.5.5 0 0 0 .708 0l5-5a.5.5 0 1 0-.708-.708L8.5 12.793V1.5a.5.5 0 0 0-1 0v11.293L3.354 8.646a.5.5 0 1 0-.708.708l5 5z">
                            </path>
                        </svg>
            
                    </div>
                    <h5 class="fw-bold mt-5 pt-3">Training Sessions at Various Bases</h5>
                    <p class="text-muted small">
                        Once you are recruited, you will undergo rigorous training exercises that enhance your flying
                        skills and foster your overall development.
                    </p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card h-100 border-0 shadow position-relative text-center p-4">
                    <div class="step-number-big text-white rounded-circle position-absolute"
                        style="background-color: #dcbb87;">
                        
                        <!-- Right Arrow for Medium & Large Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-right d-none d-md-inline" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.293 12.707a1 1 0 0 1 0-1.414L12.586 9H1a1 1 0 0 1 0-2h11.586l-2.293-2.293a1 1 0 0 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414 0z">
                            </path>
                        </svg>
            
                        <!-- Down Arrow for Small Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-down d-inline d-md-none" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 14.354a.5.5 0 0 0 .708 0l5-5a.5.5 0 1 0-.708-.708L8.5 12.793V1.5a.5.5 0 0 0-1 0v11.293L3.354 8.646a.5.5 0 1 0-.708.708l5 5z">
                            </path>
                        </svg>
            
                    </div>
                    <h5 class="fw-bold mt-5 pt-3">Mission Preparation</h5>
                    <p class="text-muted small">
                        <i>"If I had four hours to chop down a tree, I'd spend the first two hours sharpening the
                            knife."</i> - Muhammad Ali<br>
                        Comprehensive training plans ensure mission preparedness.
                    </p>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card h-100 border-0 shadow position-relative text-center p-4">
                    <div class="step-number-big text-white rounded-circle position-absolute"
                        style="background-color: #dcbb87;">
                        
                        <!-- Right Arrow for Medium & Large Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-right d-none d-md-inline" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.293 12.707a1 1 0 0 1 0-1.414L12.586 9H1a1 1 0 0 1 0-2h11.586l-2.293-2.293a1 1 0 0 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414 0z">
                            </path>
                        </svg>
            
                        <!-- Down Arrow for Small Screens -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                            class="bi bi-arrow-down d-inline d-md-none" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 14.354a.5.5 0 0 0 .708 0l5-5a.5.5 0 1 0-.708-.708L8.5 12.793V1.5a.5.5 0 0 0-1 0v11.293L3.354 8.646a.5.5 0 1 0-.708.708l5 5z">
                            </path>
                        </svg>
            
                    </div>
                    <h5 class="fw-bold mt-5 pt-3">Combat Ready</h5>
                    <p class="text-muted small">
                        Regular squadron inspections and quality checks ensure that you remain combat-ready throughout
                        the year.
                    </p>
                </div>
            </div>            
        </div>
    </div>
</section>
{{-- END Cockpit --}}

{{-- Start Client --}}
{{-- <section class="client-section ptb-120">
    <div class="client-element">
        <img src="assets/images/client/map.png" alt="map">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header">
                    <span class="sub-title"><span>Sim Airforce</span> Testimonial</span>
                    <h2 class="section-title">Our Customer Feedback</h2>
                </div>
            </div>
        </div>
        <div class="client-area">
            <div class="row justify-content-center align-items-end mb-30-none">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-30">
                    <div class="client-slider-wrapper">
                        <div class="client-slider swiper-container-horizontal">
                            <div class="swiper-wrapper"
                                style="transform: translate3d(-1520px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-duplicate"
                                    style="width: 350px; margin-right: 30px;" data-swiper-slide-index="0">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="assets/images/client/quote.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="assets/images/client/client-3.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to
                                                make money on you.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title"><a href="#0">Randall Schwartz</a></h4>
                                                <span class="sub-title">Sr. Consultant</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                    style="width: 350px; margin-right: 30px;" data-swiper-slide-index="1">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="assets/images/client/quote.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="assets/images/client/client-4.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to
                                                make money on you.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title">Andru Smith</h4>
                                                <span class="sub-title">Marketing Manager</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-active"
                                    style="width: 350px; margin-right: 30px;" data-swiper-slide-index="0">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="assets/images/client/quote.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="assets/images/client/client-3.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to
                                                make money on you.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title"><a href="#0">Randall Schwartz</a></h4>
                                                <span class="sub-title">Sr. Consultant</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                    style="width: 350px; margin-right: 30px;" data-swiper-slide-index="1">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="assets/images/client/quote.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="assets/images/client/client-4.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to
                                                make money on you.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title">Andru Smith</h4>
                                                <span class="sub-title">Marketing Manager</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
                                    style="width: 350px; margin-right: 30px;" data-swiper-slide-index="0">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="assets/images/client/quote.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="assets/images/client/client-3.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to
                                                make money on you.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title"><a href="#0">Randall Schwartz</a></h4>
                                                <span class="sub-title">Sr. Consultant</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                                    style="width: 350px; margin-right: 30px;" data-swiper-slide-index="1">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="assets/images/client/quote.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="assets/images/client/client-4.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to
                                                make money on you.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title">Andru Smith</h4>
                                                <span class="sub-title">Marketing Manager</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- Start Client --}}
{{-- Start Gallery --}}
<section style="padding: 40px 0;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div class="section-header" style="text-align: center; margin-bottom: 40px;">
        <h2  class="section-title" style="font-size: 32px; font-weight: bold; margin-bottom: 10px;"><span>Screenshot</span> Gallery</h2>
        <p style="color: #6b7280;">Explore our luxury jets through stunning visuals.</p>
      </div>
      <div class="swiper gallery-slider">
        <div class="swiper-wrapper">
          <!-- Image 1 -->
          <div class="swiper-slide" style="padding: 10px;">
            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('gallery/Screenshot Gallery 1.png') }}" style="width: 100%; height: 350PX; object-fit: cover;" alt="Gallery Image 1">
            </div>
          </div>
          <!-- Image 2 -->
          <div class="swiper-slide" style="padding: 10px;">
            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('gallery/Screenshot Gallery 2.png') }}" style="width: 100%; height: 350PX; object-fit: cover;" alt="Gallery Image 2">
            </div>
          </div>
          <!-- Image 3 -->
          <div class="swiper-slide" style="padding: 10px;">
            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('gallery/Screenshot Gallery 3.png') }}" style="width: 100%; height: 350PX; object-fit: cover;" alt="Gallery Image 3">
            </div>
          </div>
          <!-- Image 4 -->
          <div class="swiper-slide" style="padding: 10px;">
            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('gallery/Screenshot Gallery 4.png') }}" style="width: 100%; height: 350PX; object-fit: cover;" alt="Gallery Image 3">
            </div>
          </div>
          <!-- Image 5 -->
          <div class="swiper-slide" style="padding: 10px;">
            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('gallery/Screenshot Gallery 5.png') }}" style="width: 100%; height: 350PX; object-fit: cover;" alt="Gallery Image 3">
            </div>
          </div>
          <!-- Image 6 -->
          <div class="swiper-slide" style="padding: 10px;">
            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('gallery/Screenshot Gallery 6.png') }}" style="width: 100%; height: 350PX; object-fit: cover;" alt="Gallery Image 3">
            </div>
          </div>
        </div>
  
        <!-- Navigation -->
        <div class="slider-prev" style="cursor: pointer; position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #4b5563;">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slider-next" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%); color: #4b5563;">
          <i class="fas fa-chevron-right"></i>
        </div>
        
        <!-- Pagination -->
        <div class="swiper-pagination" style="text-align: center; margin-top: 15px;"></div>
      </div>
    </div>
</section>  
{{-- End Gallery --}}
{{-- Start START Brand --}}
<div class="brand-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span>Our</span> Partners</h2>
                    <p>We're not in this journey alone. We've partnered with the best people in the industry to provide a spectacular experience to you.</p>
                </div>

                <!-- Swiper Container for Brand Images -->
                <div class="swiper-container brand-slider">
                    <div class="swiper-wrapper">
                        <!-- First Image -->
                        <div class="px-4" style="width: 350px; height: auto;">
                            <img class="w-full" src="https://assets.simairforce.com/images/VATSIM_Logo_Official_500px.png" alt="VATSIM Logo">
                        </div>
                        <!-- Second Image -->
                        <div class="px-4" style="width: 350px; height: auto;">
                            <img class="w-full" src="https://assets.simairforce.com/images/logo.png" alt="SimAirforce Logo">
                        </div>
                        <!-- Third Image -->
                        <div class="px-4" style="width: 350px; height: auto;">
                            <img class="w-full" src="https://assets.simairforce.com/images/VATSIM_Special_Ops_v2_2000px.png" alt="VATSIM Special Ops Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Start END Brand --}}
@endsection