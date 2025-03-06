@extends('layouts.app')

@section('css')
  
<style>
  .mission-container {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  }

  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: 300px;
    transition: opacity 0.5s ease;
    backface-visibility: hidden;
  }

  .middle {
    transition: opacity 0.5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  .mission-container:hover .image {
    opacity: 0.3;
    filter: blur(1px);
  }

  .mission-container:hover .middle {
    opacity: 1;
  }
</style>
@endsection

@section('content')
<section class="banner-section pt-4" style="height : 40vh;">
  <div class="pt-4">
      <div class="banner-element aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
          <img src="{{ asset('element-1.png') }}" alt="element">
      </div>
      <div class="banner-element-two">
        <img src="{{ asset('element-5.png') }}" alt="element">
    </div>
    <div class="banner-element-three">
        <img src="{{ asset('element-4.png') }}" alt="element">
    </div>
    <div class="banner-element-four">
        <img src="{{ asset('element-5.png') }}" alt="element">
    </div>
      <div class="container-fluid">
          <div class="row justify-content-center align-items-center text-center">
              <div class="col-xxl-12 col-xl-12 col-lg-12 pt-4">
                  <div class="banner-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1800">
                      <span class="sub-title"></span>
                      <h1 class="title"><span class="pe-2">Our Missions</h1>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item"><a href="index.html">Operations</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Missions</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>        
  </div>
</section>
<section>
  <div class="py-5">
    <div class="container">
      <div class="mb-5 text-left">
        <h2 class="mt-4"><strong>Missions</strong></h2>
        <div class="mt-3 text-left">
        <p class="lead lh-300">With Simairforce, Your missions are full of challenges.</p>
        <hr class="mt-1" style="width: 100px; height: 2px; background-color: #163270; float: left">
        </div>
      </div>
  
      <div class="row g-4">
        <div class="col-lg-6 col-md-6 p-4">
          <div class="mission-container">
            <img src="https://assets.simairforce.com/images/NY_NY.png" alt="New York" class="image">
            <div class="middle">
              <div class="text">
                <h3>Special Air Missions (SAM)</h3>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 col-md-6 p-4">
          <div class="mission-container">
            <img src="https://assets.simairforce.com/images/Maint.png" alt="New York" class="image">
            <div class="middle">
              <div class="text">
                <h3>Maintenace checks on the C130</h3>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 col-md-6 p-4">
          <div class="mission-container">
            <img src="https://assets.simairforce.com/images/Cargo Operations1.png" alt="Beijing" class="image">
            <div class="middle">
              <div class="text">
                <h3>Cargo Operations</h3>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 col-md-6 p-4">
          <div class="mission-container">
            <img src=" https://assets.simairforce.com/images/Flight Training in the T38.png" alt="Mumbai" class="image">
            <div class="middle">
              <div class="text">
                <h3>Flight Training in the T38</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 p-4">
          <div class="mission-container">
            <img src="https://assets.simairforce.com/images/Setting up for Air to Air Refueling.png" alt="Mumbai" class="image">
            <div class="middle">
              <div class="text">
                <h3>Setting up for Air to Air Refueling</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection