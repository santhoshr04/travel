@extends('layouts.app')

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
                      <h1 class="title"><span class="pe-2">Upcoming Departures</h1>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item"><a href="index.html">Stats</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Upcoming Departures</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>        
  </div>
</section>
<div class="main-content">
  <section class="slice slice-sm">
    <div class="container">
      <div class="mb-5 text-left">
        <h2 class="mt-4"><strong>Who's next in line to take it to the skies?</strong></h2>
        <div class="mt-3 text-left">
          <p class="lead lh-300">There are {{ count($bids) }} upcoming departures</p>
          <hr class="mt-1" style="width: 100px; height: 2px; background-color: #163270; float: left">
        </div>
      </div>

      @if(count($bids) > 0)
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr class="table-head">
                <th>Airline</th>
                <th>Flight No#</th>
                <th>Pilot in Command</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Aircraft</th>
              </tr>
            </thead>
            <tbody>
              @foreach($bids as $bid)
                <tr>
                  <td>
                    <img src="{{ env('VA_URL') . '/lib/images/airline/' . $bid->code . '.png' }}" width="127px" height="auto" />
                  </td>
                  <td>{{ $bid->code }}{{ $bid->flightnum }}</td>
                  <td>{{ $bid->firstname }} {{ $bid->lastname }}</td>
                  <td>
                    <a target="_blank" class="btn btn-success btn-sm" data-toggle="tooltip" title="Click to view Airport Information!" href="https://icrew.gccvirtual.com/index.php/airports/get_airport?icao={{ $bid->depicao }}">
                      {{ $bid->depicao }}
                    </a>
                  </td>
                  <td>
                    <a target="_blank" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Click to view Airport Information!" href="https://icrew.gccvirtual.com/index.php/airports/get_airport?icao={{ $bid->arricao }}">
                      {{ $bid->arricao }}
                    </a>
                  </td>
                  <td>
                    <a target="_blank" class="btn btn-info btn-sm" data-toggle="tooltip" title="Click to view Aircraft Information!" href="https://icrew.gccvirtual.com/index.php/vFleetTracker/view/{{ $bid->registration }}">
                      {{ $bid->aircraft }} ({{ $bid->registration }})
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <div class="alert bg-info alert-shadow alert-dismissible fade show mt-4" role="alert">
          <h3 class="text-white"><strong>No upcoming departures available</strong></h3>
          <p class="text-white">Please login to iCrew v4™ to book a flight.</p>
        </div>
      @endif
    </div>
  </section>
</div>
@endsection
