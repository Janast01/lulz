@extends('layouts.default')

@section('content')
<div class="content-wrapper">
	<div class="page-header">
		<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white me-2">
			<i class="mdi mdi-home"></i>
		</span> {{ $title }}
		</h3>
		<nav aria-label="breadcrumb">
			<ul class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">
				  	<span></span> View Attendances <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
				</li>
			</ul>
		</nav>
	</div>
	<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	<div class="card">
          <div class="card-body">
            <h4 class="card-title">BSIT</h4>
            </p>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Event Name</th>
                  <th>Status</th>
                  <th>Id number</th>
                  <th>Student Name</th>
                  <th>Added By</th>
                </tr>
              </thead>
              <tbody>
                @foreach($attendances as $attendance)
                <tr>
                  <td>{{ $attendance['event_name'] }}</td>
                  <td>{{ $attendance['status'] }}</td>
                  <td>{{ $attendance['id_number'] }}</td>
                  <td>{{ $attendance['student_name'] }}</td>
                  <td>{{ $attendance['added_by'] }}</td>
                </tr>
                @endforeach

                
              </tbody>
            </table>
          </div>
        	</div>
      	</div>
      </div>
</div>
@endsection