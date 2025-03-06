@extends('layouts.app')

@section('content')
{{-- <section class="banner-section pt-4" style="height : 40vh;">
    <div class="pt-4">
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
</section> --}}
<section class="about-section bg-overlay-base ptb-120 bg_img" data-background="{{ asset('T38.png') }}"
    style="background-image: url(&quot;{{ asset('T38.png') }}&quot;);">
    <div class="about-element">
        <img src="{{ asset('element-9.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xxl-12 col-xl-12 col-lg-12 pt-4 text-center">
                <div class="banner-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1800">
                    <span class="sub-title"></span>
                    <h1 class="title"><span style="color: white;">About</span><span style="color: #dcbb87;">Us</span></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section about--style page-wrapper-two ptb-120"> 
    <div class="container">
      <div class="row justify-content-center mb-30-none">
        <!-- Left Side: Logo -->
        <div class="col-xl-6 col-lg-6 mb-30 pt-60">
          <div class="about-thumb aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
            <img src="https://icrew.simairforce.com/iCrew/favicon.png" alt="Company Logo" class="img-fluid">
          </div>
        </div>
        <!-- Right Side: About Us Content -->
        <div class="col-xl-6 col-lg-6 mb-30">
          <div class="about-content aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
            <span class="sub-title text--base">About us</span>
            <h2 class="title">We Provide a Unique Pilot Experience</h2>
            <p>We provide a unique pilot experience by bringing together a strong, friendly community, advanced software, and realistic policies and procedures. Combined, we are able to strike a balance between realism and simulation that focuses on making things as realistic as possible while making concessions for simulator limitations.</p>
            <p>Our constant innovation is driven by monthly town hall meetings, which help us discuss the next round of features or address pain points that pilots are experiencing. The result is an ever-evolving system designed with one goal: Improve the pilot experience.</p>
          </div>
        </div>
      </div>
    </div>
</section>
{{-- Start Feature --}}
<section class="feature-section page-wrapper-two">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
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
<section class="history-section bg--gray ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                    <span class="sub-title"><span>Our History</span></span>
                    <h2 class="section-title">What Makes Us Special</h2>
                </div>
            </div>
        </div>
        <div class="history-area">
            <div class="history-item">
                <div class="history-thumb aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                    <img src="https://icrew.simairforce.com/iCrew/favicon.png" class="px-4" alt="history">
                </div>
                <div class="history-content aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                    <h2 class="year">2006</h2>
                    <h3 class="title">SIMAF Founded</h3>
                    <p>SIMAF was created and founded, marking the beginning of a journey to provide exceptional services to the pilot community.</p>
                </div>
            </div>
            <div class="history-item pt-4">
                <div class="history-thumb aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                    <img src="https://assets.simairforce.com/images/logo.png" class="px-4" alt="history">
                </div>
                <div class="history-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                    <h2 class="year">2019</h2> 
                    <h3 class="title"><span><img class="logo" src="" alt=""></span> Collaboration with iCrewsystems</h3>
                    <p>Hired iCrewsystems to develop a new crew center called iCrew, advancing the capabilities and experience for our pilots.</p>
                </div>
            </div>
            <div class="history-item pt-4">
                <div class="history-thumb aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                    <img src="{{ asset('ics_logo.png') }}"  class="px-4"  alt="history">
                </div>
                <div class="history-content aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                    <h2 class="year">2025</h2>
                    <h3 class="title">Revamped Homepage</h3>
                    <p>Revamped the homepage with live stats, offering a more dynamic and engaging experience for users.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg mt-6 aos-init aos-animate ptb-120" data-aos="fade-up">
    <div class="container">
        <div class="mb-5 text-left">
            <h2 class="mt-4"><strong>With <i  style="color:#e80558;" class="fa fa-heart"></i>
                from the founder's desk</strong></h2>
            <div class="mt-3 text-left">
                <hr class="mt-1" style="width: 100px; height: 2px; background-color: #163270; float: left;">
            </div>
        </div>
        <hr class="hr-primary">
        <br>
        <h4>Dear Aviator,</h4>
        <p class="text">
            <br>SIMAF (Simulated United States Air Force) was envisioned in October 2006 and officially opened in April 2008 for all virtual pilots flying on the VATSIM network. Our mission has always been to provide an immersive experience for virtual pilots, replicating the real-world operations of United States Air Force pilots as closely as possible.
            <br>We take pride in fostering a community where passion for aviation meets a structured, engaging environment, allowing pilots to hone their skills and enjoy the thrill of virtual military aviation.
            <br>Thank you for being part of this journey.
        </p>
        <i style="color:#163270;">- Founder,</i>
        <br>
        Barry Jeter
    </div>
</section>
@endsection