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
                    <h1 class="title"><span style="color: white;">Our </span><span style="color: #dcbb87;"> Fleets</span></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Fleets</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container mx-auto mt-16 px-6">
  <div class="mb-10 text-left">
    <h2 class="text-3xl font-bold mt-4 text-gray-800">Our Fleet</h2>
    <p class="mt-2 text-lg text-gray-600">Have a look at our massive fleet of the best aircrafts.</p>
    <div class="mt-2 h-1 w-24 bg-blue-700"></div>
  </div>

  <div class="container mt-5">
    <div class="row">
      @foreach ($fleets as $fleet)
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm rounded-lg">
            <div class="card-body">
              <h5 class="card-title text-center text-primary">{{ $fleet->icao }}</h5>
              <h6 class="card-subtitle text-center text-muted">{{ $fleet->fullname ?? 'N/A' }}</h6>
              <hr class="my-3">
              <ul class="list-unstyled text-muted">
                <li><strong>Range:</strong> {{ $fleet->range ?? '0' }} NM</li>
                <li><strong>Weight:</strong> {{ $fleet->weight ?? '0' }} KGS</li>
                <li><strong>Cruise Altitude:</strong> {{ $fleet->cruise ?? 'N/A' }}</li>
                <li><strong>Max Pax:</strong> {{ $fleet->maxpax ?? '0' }}</li>
                <li><strong>Max Cargo:</strong> {{ $fleet->maxcargo ?? '0' }}</li>
              </ul>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section> 
@endsection