@extends('layouts.app')

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#liveflight_table').DataTable();
        });
    </script>
@endsection

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://raw.githubusercontent.com/leaflet-extras/leaflet-providers/master/leaflet-providers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.geodesic"></script>

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
                            <h1 class="title"><span class="pe-2">Liveflights</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="index.html">Stats</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liveflights</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="main-content mt-100">
        <section class="slice slice-sm">
            <div class="container">
                <div class="mb-5 text-left">
                    <h2 class=" mt-4"><strong>There are {{ count($flights) }} pilots airborne.</strong></h2>
                    <div class=" mt-3 text-left">
                        <p class="lead lh-300">Proudly flying for GCC Virtual.</p>
                        <hr class="mt-1" style="width: 100px; height: 2px; background-color: #163270; float: left">
                    </div>
                </div>


                <div class="container mt-5 mb-5">
                    <!-- DataTable -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="tabs tabs-clean">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="map-tab" data-toggle="tab" href="#flightmap"
                                            role="tab" aria-controls="home" aria-selected="false">Map</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="list-tab" data-toggle="tab" href="#flightlist"
                                            role="tab" aria-controls="profile" aria-selected="false">List</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="alert alert-success mt-2">
                                        To view more accurate flight tracking, login to iCrew&trade;
                                    </div>
                                    <div class="tab-pane fade active show" id="flightmap" role="tabpanel"
                                        aria-labelledby="map-tab">
                                        <style>
                                            #mapid {
                                                height: 480px;
                                                z-index: 10;
                                            }
                                        </style>
                                        <div id="mapid"></div>
                                        <script>
                                            // Initialize the map
                                            var map = L.map('mapid').setView([20, 0], 2);

                                            // Right logo legend
                                            var rightLogoLegend = L.control({
                                                position: 'bottomright'
                                            });
                                            rightLogoLegend.onAdd = function() {
                                                var div = L.DomUtil.create('div', 'info legend');
                                                div.innerHTML = '<img src="{{ env('VA_URL') }}/iCrew/favicon.png" style="width: 50px; height: auto;" />';
                                                return div;
                                            };
                                            rightLogoLegend.addTo(map);

                                            // Left legend
                                            var leftLegend = L.control({
                                                position: 'bottomleft'
                                            });
                                            leftLegend.onAdd = function() {
                                                var div = L.DomUtil.create('div', 'info legend');
                                                div.innerHTML = '<h1 class="badge badge-success">Data provided by iCrew&trade; API</h1>';
                                                return div;
                                            };
                                            leftLegend.addTo(map);

                                            // Center flight legend
                                            var flightNameCenter = L.control({
                                                position: 'topright'
                                            });
                                            flightNameCenter.onAdd = function() {
                                                var div = L.DomUtil.create('div', 'info legend');
                                                div.innerHTML = '<br><span class="alert alert-success">{{ count($flights) }} flights active</span>';
                                                return div;
                                            };
                                            flightNameCenter.addTo(map);

                                            var url = "{{ env('VA_URL') }}";

                                            let headingIcons = {};
                                            const getHeadingIcon = (heading) => {
                                                if (!(heading in headingIcons)) {
                                                    headingIcons[heading] = L.icon({
                                                        iconUrl: url + "/lib/images/inair/" + heading + ".png",
                                                        iconSize: [25, 25]
                                                    });
                                                }
                                                return headingIcons[heading];
                                            };

                                            // Plot Live Flights on the map
                                            @foreach ($flights as $flight)
                                                L.marker(['{{ $flight->lat }}', '{{ $flight->lng }}'], {
                                                    icon: getHeadingIcon('{{ $flight->heading }}')
                                                }).bindTooltip("{{ $flight->flightnum }}").bindPopup(`
                              <center>
                                  <span class="btn btn-primary">{{ $flight->flightnum }}</span> <br><br> 
                                  Ground Speed: {{ $flight->gs }} KTS <br> 
                                  Heading: {{ $flight->heading }}&deg; <br> 
                                  Altitude: {{ $flight->alt }} ft AMSL <br>
                                  <img src="{{ env('VA_URL') . '/lib/images/airline/' . substr($flight->flightnum, 0, 3) . '.png' }}" width="127px" height="auto;" />
                                  <br><hr>
                                  @if (!$flight->online)
                                      OFFLINE
                                  @else
                                      @switch($flight->online)
                                        @case('IVAO')
                                        <center><img src="https://media.discordapp.net/attachments/731149844999176243/770960610791391242/IVAO_Logo.png?width=612&height=612" style="width: 50px; height: auto;"></center>
                                        @break

                                        @case('VATSIM')
                                        <center><img src="https://media.discordapp.net/attachments/731149844999176243/770961542191513610/Vatsim.png" style="width: 90px; height: auto;"></center>
                                        @break

                                        @default
                                        {{ strtoupper($flight->online) }}
                                      @endswitch
                                  @endif
                              </center>
                          `).addTo(map);
                                            @endforeach

                                            L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/{variant}/{z}/{x}/{y}.png', {
                                                attribution: 'GCC Virtual Live data stream',
                                                maxZoom: 18,
                                                variant: 'light_all',
                                                id: 'mapbox/streets-v11',
                                                accessToken: '{{ env('MAPBOX_KEY') }}'
                                            }).addTo(map);
                                        </script>
                                    </div>
                                    <div class="tab-pane fade" id="flightlist" role="tabpanel" aria-labelledby="list-tab">
                                        @if (empty($flights))
                                          <div class="alert alert-shadow alert-dismissible fade show" role="alert" style="background-color: #0A3161">
                                            <h3 class="text-white"><strong>No recent live flights available</strong></h3>
                                          </div>
                                        @else
                                        <table class="table" id="liveflight_table">
                                          <thead>
                                              <tr>
                                                  <th>Operator</th>
                                                  <th>Callsign</th>
                                                  <th>Pilot</th>
                                                  <th>Route</th>
                                                  <th>Aircraft</th>
                                                  <th>Status</th>
                                                  <th>Network</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($flights as $flight)
                                                  @php
                                                      $flightnum = str_split($flight->flightnum, 3);
                                                      $phase = $flight->phasedetail;
                                                  @endphp
                                                  <tr>
                                                      <td>
                                                          <img src="{{ env('VA_URL') . '/lib/images/airline/' . $flightnum[0] . '.png' }}"
                                                              style="width: 150px; height: auto;" />
                                                      </td>
                                                      <td>{{ $flight->flightnum }}</td>
                                                      <td>{{ $flight->pilotname }}</td>
                                                      <td>{{ $flight->depicao }} - {{ $flight->arricao }}</td>
                                                      <td>{{ $flight->aircraft }}</td>
                                                      <td>
                                                          @if ($phase == 'Preflight')
                                                              <span
                                                                  class="btn btn-sm btn-default">{{ $phase }}</span>
                                                          @elseif ($phase == 'Taxiing to Runway' || $phase == 'Pushing Back')
                                                              <span
                                                                  class="btn btn-sm btn-warning animation-pulse">{{ $phase }}</span>
                                                          @elseif (in_array($phase, ['Taking Off', 'Climbing', 'Approaching']))
                                                              <span
                                                                  class="btn btn-sm btn-primary animation-pulse">{{ $phase }}</span>
                                                          @elseif ($phase == 'Cruising')
                                                              <span
                                                                  class="btn btn-sm btn-success">{{ $phase }}</span>
                                                          @elseif ($phase == 'Descending')
                                                              <span
                                                                  class="btn btn-sm btn-warning animation-pulse">{{ $phase }}</span>
                                                          @elseif ($phase == 'Final Approach' || $phase == 'Landing')
                                                              <span
                                                                  class="btn btn-sm btn-danger animation-pulse">{{ $phase }}</span>
                                                          @elseif ($phase == 'Taxiing to Gate')
                                                              <span
                                                                  class="btn btn-sm btn-success animation-pulse">{{ $phase }}</span>
                                                          @else
                                                              <span
                                                                  class="btn btn-sm btn-danger animation-pulse">{{ $phase }}</span>
                                                          @endif
                                                      </td>
                                                      <td>{{ $flight->online }}</td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: DataTable -->
                </div>

        </section>
    </div>
@endsection
