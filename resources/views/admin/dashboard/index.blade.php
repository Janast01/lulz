@extends('layouts.default')

@section('content')
	<div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> {{ $pagetitle }}
        </h3>
      </div>
      <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal mb-3">Admin
              </h4>
              <h2 class="mb-5">{{ App\Models\User::count(); }}</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal mb-3">Events</i>
              </h4>
              <h2 class="mb-5">{{ App\Models\User::count(); }}</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal mb-3">Total Students
              </h4>
              <h2 class="mb-5">{{ App\Models\User::count(); }}</h2>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection