@extends('layouts.app')

@section('content')
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
                    <h1 class="title"><span style="color: white;">Our </span><span style="color: #dcbb87;">team</span></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-section team--style ptb-120"> 
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-header-wrapper">
                    <div class="section-header aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                        <h2 class="section-title">Our Air Staff</h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center mb-30-none">
            <!-- Team Member 1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="team-item aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="team-thumb">
                        <img src="assets/images/team/barry-jeter.png" alt="Barry Jeter">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Barry "Drama" Jeter</h3>
                        <span class="sub-title">Simulated Secretary of the United States Air Force (SecAF)</span>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="team-item aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="team-thumb">
                        <img src="assets/images/team/prince-shaggy.png" alt="Prince Shaggy">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Prince "Shaggy"</h3>
                        <span class="sub-title">Simulated Chief of Staff of the Air Force (CSAF)</span>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="team-item aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="team-thumb">
                        <img src="assets/images/team/micheal-schmitt.png" alt="Micheal Schmitt">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Micheal "Stalker" Schmitt</h3>
                        <span class="sub-title">A1: Public Relations Officer</span>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-center mb-30-none">
            <!-- Team Member 1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-6 pb-4">
                <div class="team-item bg-white p-6 rounded-lg shadow-sm hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <div style="height: 250px" class="team-content flex flex-col items-center justify-center h-full"> <!-- Flex for centering -->
                        <i class="fa fa-user-tie text-gray-800 fa-5x mb-4"></i> <!-- Large centered icon -->
                        <h3 class="title text-xl font-semibold text-gray-800 mb-2">
                            Barry "Drama" Jeter
                        </h3>
                        <span class="sub-title text-gray-600">Simulated Secretary of the United States Air Force (SecAF)</span>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-6 pb-4">
                <div class="team-item bg-white p-6 rounded-lg shadow-sm hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <div style="height: 250px" class="team-content flex flex-col items-center justify-center h-full"> <!-- Flex for centering -->
                        <i class="fa fa-user-tie text-gray-800 fa-5x mb-4"></i> <!-- Large centered icon -->
                        <h3 class="title text-xl font-semibold text-gray-800 mb-2">
                            Prince "Shaggy"
                        </h3>
                        <span class="sub-title text-gray-600">Simulated Chief of Staff of the Air Force (CSAF)</span>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-6 pb-4">
                <div class="team-item bg-white p-6 rounded-lg shadow-sm hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <div style="height: 250px" class="team-content flex flex-col items-center justify-center h-full"> <!-- Flex for centering -->
                        <i class="fa fa-user-tie text-gray-800 fa-5x mb-4"></i> <!-- Large centered icon -->
                        <h3 class="title text-xl font-semibold text-gray-800 mb-2">
                            Micheal "Stalker" Schmitt
                        </h3>
                        <span class="sub-title text-gray-600">A1: Public Relations Officer</span>
                    </div>
                </div>
            </div>
        </div>                              
    </div>
</section>

@endsection