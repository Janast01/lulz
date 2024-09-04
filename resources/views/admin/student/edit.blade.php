@extends('layouts.default')

@section('content')
	<div class="container bg-primary">
      <div class="page-header">
       <!--  <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> {{ $pagetitle }}
        </h3> -->
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
          </ul>
        </nav>
      </div>
    <h3 style="font-size: 24px; color: white; font-family: Arial, sans-serif; text-align: center;">Edit</h3>
      <div class="row  d-flex justify-content-center">
        <div class="col-md-6 col-sm-12">
        	<div class="card">
                <div class="card-body">
                    <form class="form-sample" method="POST" action="">
                        <div class="row">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3" class="text-dark">ID Number</label>
                                    <input type="text" class="form-control text-dark" name="idnum" id="idnum" placeholder="ID No." maxlength="9" value="{{ $stud_info['idnumber'] }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control text-dark" id="fname" placeholder="First Name" value="{{ $stud_info['first_name'] }}" maxlength="9">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control text-dark" name="lastname" id="lname" value="{{ $stud_info['last_name'] }}" placeholder="Last Name" maxlength="9">
                                </div>
                            </div>                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select class="form-control text-dark" name="semester" id="semester" style="padding: 17px">
                                        @if($stud_info['section'])
                                            <option value="1" selected>{{ $stud_info['section'] }}</option>
                                        @endif
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Year Level</label>
                                    <select class="form-control text-dark" name="semester" id="semester" style="padding: 17px">
                                        @if($stud_info['year'])
                                            <option value="1" selected>{{ $stud_info['year'] }}</option>
                                        @endif
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                      <button type="submit" class="btn btn-gradient-primary me-2, mt-4" style="padding: 10px">Update</button>
                    </form>
                </div>
            </div>
      	</div>
      </div>
    </div>  
  </div>
@endsection
