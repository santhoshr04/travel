@extends('layouts.app')

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#pireps_table').DataTable();
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
						<h1 class="title"><span class="pe-2">Pireps</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item"><a href="index.html">Stats</a></li>
								<li class="breadcrumb-item active" aria-current="page">Recent PIREPS</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>        
	</div>
</section>
<div class="main-content mt-6">
	<section class="slice slice-sm">
	  <div class="container">
		<div class="mb-5 text-left">
		  <h2 class="mt-4"><strong>Latest Flights</strong></h2>
		  <div class="mt-3 text-left">
			<p class="lead lh-300">Last 50 flights of SimAirForce</p>
			<hr class="mt-1" style="width: 100px; height: 2px; background-color: #163270; float: left">
		  </div>
		</div>
		<div class="row mb-5">
		  <div class="col">
			@if(count($pireps) > 0)
			  <div >
				<table class="table" id="pireps_table">
					<thead>
					  <tr class="table-head">
						<th>Airline</th>
						<th>Flight #</th>
						<th>Pilot in Command</th>
						<th>Route</th>
						<th>Duration</th>
						<th>Landing Rate</th>
						<th>Status</th>
					  </tr>
					</thead>
					<tbody class="table-body">
					  @foreach($pireps as $pirep)
						<tr>
						  <td><img src="{{ env('VA_URL') . '/lib/images/airline/' . $pirep->code . '.png' }}" width="127px" height="auto;" /></td>
						  <td>{{ $pirep->code . $pirep->flightnum }}</td>
						  <td>{{ App\Models\Stats::getPilotName($pirep->pilotid) }}</td>
						  <td>{{ $pirep->depicao . ' - ' . $pirep->arricao }}</td>
						  <td>{{ $pirep->flighttime_stamp }}</td>
						  <td>{{ $pirep->landingrate == 0 ? 'Manual Pirep' : $pirep->landingrate }}</td>
						  <td>
							@if($pirep->accepted == 1)
							  <span class="btn btn-success btn-sm">ACCEPTED</span>
							@elseif($pirep->accepted == 2)
							  <span class="btn btn-danger btn-sm">REJECTED</span>
							@else
							  <span class="btn btn-primary btn-sm">PENDING</span>
							@endif
						  </td>
						</tr>
					  @endforeach
					</tbody>
				  </table>
			  </div>
			@else
			  <div class="alert bg-info alert-shadow alert-dismissible fade show" role="alert">
				<h3 class="text-white"><strong>No recent flights available</strong></h3>
				<p class="text-white">Please log in to iCrew v4&trade; to view flight reports or book a flight.</p>
			  </div>
			@endif
		  </div>
		</div>
	  </div>
	</section>
</div>
@endsection
