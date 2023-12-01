@extends('layouts.default')

@section('content')

		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<h4 class="card-title">Add</h4>
					<form class="form-sample" enctype="multipart/form-data" method="POST" action="{{route ('academicyear.save') }}">
						
						@crsf
					<div class="form-group">
						<label for="academicyear">Academic Year</label>
						<input type="nu
						mber" name="academicyear" class="form-control" id="acadyear">
					</div>
					</form>
				</div>
		</div>
@endsection