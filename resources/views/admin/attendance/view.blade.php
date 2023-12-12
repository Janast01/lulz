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
                    <div class="table-responsive">
                    <table id="mytable" class="display table">
                      <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell">Event Name</th>
                            <th>Status</th>
                            <th class="d-none d-md-table-cell">Id number</th>
                            <th class="d-none d-lg-table-cell">Student Name</th>
                            <th class="d-none d-xl-table-cell">Added By</th>
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

<link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
@endsection