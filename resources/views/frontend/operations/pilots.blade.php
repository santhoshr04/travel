@extends('layouts.app')

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pilot_table').DataTable();
    });
</script>
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

<style media="screen">
  .table-head{
    color: #000;
    font-weight: bold;
    font-size: 100%;
  }
  .table{
    color: #163270;
    font-weight: bold;
  }

</style>
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
                      <h1 class="title"><span class="pe-2">Pilots Roster</h1>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item"><a href="index.html">Operations</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Pilots Roster</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>        
  </div>
</section>
<!-- Home End -->
<br><br><br><br>
<section>
  <div class="container mt-6 mb-6">
      <!-- DataTable -->
      <div class="row">
        <div class="col-sm-12 col-lg-12 table-responsive">
          <table id="pilot_table" class="ui-responsive table-stroke table table-hover">
            <thead>
              <tr class="table-head">
                <th>Pilot ID</th>
                <th>Name</th>
                <th>Member Since</th>
                <th>Hours Logged</th>
                <th>Rank</th>
                <th>Hub</th>
                <th>IVAO VID</th>
                <th>Vatsim CID</th>
              </tr>
            </thead>
            <tbody>
              @if(count($pilots) > 0)
                @foreach($pilots as $pilot)
                <tr>
                  <td>{{ $pilot->code.$pilot->pilotid }}</td>
                  <td>{{ $pilot->firstname.' '.$pilot->lastname }}</td>
                  <td>{{ date('d/m/Y', strtotime($pilot->joindate)) }}</td>
                  <td>{{ $pilot->totalhours + $pilot->transferhours }} Hours</td>
                  <td>{{ $pilot->rank }}</td>
                  <td>{{ $pilot->hub }}</td>
                  <td>
                    @php
                      $ivao = App\Models\Operations::getIVAO_ID($pilot->pilotid);
                    @endphp
                    @if($ivao == '')
                      <span class="badge badge-info">Not Linked</span>
                    @else
                      <span class="badge badge-info">{{ $ivao }}</span>
                    @endif
                  </td>
                  <td>
                    @php
                      $vatsim = App\Models\Operations::getVATSIM_ID($pilot->pilotid);
                    @endphp
                    @if($vatsim == '')
                      <span class="badge badge-success">Not Linked</span>
                    @else
                      <span class="badge badge-success">{{ $vatsim }}</span>
                    @endif
                  </td>
                </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="8" class="text-center">
                    <strong>No pilots found.</strong>
                  </td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>       <br><br>
    </div>

</section>


<script> jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "formatted-num-pre": function ( a ) {
        a = (a === "-" || a === "") ? 0 : a.replace( /[^\d\-\.]/g, "" );
        return parseFloat( a );
    },

    "formatted-num-asc": function ( a, b ) {
        return a - b;
    },

    "formatted-num-desc": function ( a, b ) {
        return b - a;
    }
} );

$('#myTable').dataTable( {
     columnDefs: [
       { type: 'formatted-num', targets: 0 }
     ]
  } ); </script>
@endsection
