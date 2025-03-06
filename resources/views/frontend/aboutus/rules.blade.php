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
                    <h1 class="title"><span style="color: white;">Our </span><span style="color: #dcbb87;">Rules</span></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Rules</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-50 py-12 pt-40">
    <div class="container mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-blue-600">Our Rules</h2>
        <p class="text-gray-600 mt-2 text-lg">Guidelines for Virtual Special Operations Associations (VSOA) and their Members</p>
      </div>
  
      <!-- Rules Content -->
      <div class=" pt-20 pb-120">
        <div class="row g-4 pt-4">
            <!-- Left Column: Permitted Activities -->
            <div class="col-lg-6">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h3 class="card-title fw-semibold text-dark mb-3">Permitted Activities</h3>
                  <p class="text-secondary mb-4">Only Virtual Special Operations Associations (VSOA) and their active members are authorized to participate in these operations:</p>
                  <ul class="list-group list-group-flush" style="padding-left: 25px; list-style: none;">
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Joint training exercises with other approved VSOAs
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        War games and air combat maneuvers
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Air-to-air refueling and carrier operations
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Flying low-level military routes and escort missions
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Search and rescue operations
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Firefighting operations
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Interception/scramble of other aircraft
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Access to special-use airspace
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Launch and recovery of space vehicles
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Air displays (flying displays, races)
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        Flying unmanned aerial vehicles (e.g., Global Hawk)
                    </li>
                  </ul>
                </div>                              
              </div>
            </div>
      
            <!-- Right Column: Training Requirements -->
            <div class="col-lg-6">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h3 class="card-title fw-semibold text-dark mb-3">Training Requirements</h3>
                  <p class="text-secondary mb-4">Pilots are required to meet the following training standards:</p>
                  <ul class="list-group list-group-flush" style="padding-left: 25px; list-style: none;">
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Aircraft Familiarization:</strong> One hour of VFR training to maintain control of the aircraft, including ATC communication, ground handling, and pattern work.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Navigation Exercises:</strong> Two hours involving VOR/NDB/DME/GPS systems and flight planning.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>IFR Navigation:</strong> Three hours covering holding procedures, cross-country flight, and missed approaches.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Advanced Online Flight Training:</strong> Four hours focusing on engine failures, formation flying, and aerial refueling.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Military Training Routes:</strong> Pilots must demonstrate knowledge of restricted areas and proper procedures for air-to-air refueling routes.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Training Records:</strong> Must be maintained and presented to VSOD upon request.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Fast-track Certification:</strong> VSO partners may fast-track certified pilots from other VATSIM-approved VSOs.
                    </li>
                    <li class="list-group-item" style="position: relative; padding-left: 25px;">
                        <span style="position: absolute; left: 0; top: 20px; width: 8px; height: 8px; border-radius: 50%; background-color: black;"></span>
                        <strong>Pilot Rating Transfers:</strong> Military Pilot Ratings are transferrable between Special Operations Partners.
                    </li>
                  </ul>
                </div>                
              </div>
            </div>
          </div>
      </div>
    </div>
</section>    
@endsection