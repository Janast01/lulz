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
				  	<span></span>Total Fines <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
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
                  <th>Student Name</th>
                  <th>Course</th>
                  <th>Section/Year</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jomaico Abusca</td>
                  <td>BSIT</td>
                  <td>3-B</td>
                  <td><label class="badge badge-danger">10,000</label></td>
                </tr>
                <tr>
                  <td>Bea Morales</td>
                  <td>BSIT</td>
                  <td>3-B</td>
                  <td><label class="badge badge-danger">35,000</label></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        	</div>
      	</div>
      </div>
</div>
@endsection