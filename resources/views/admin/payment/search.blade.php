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
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	<div class="card">
                <div class="card-body">
                    <form class="form-sample" method="POST" action="{{ route('payment.search')}}">
                        <div class="row">
                            @csrf
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail3" class="text-dark">ID Number</label>
                                    <input type="text" class="form-control text-dark" name="idnum" id="idnum" placeholder="ID No." maxlength="9">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control text-dark" id="fname" placeholder="First Name" maxlength="9">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control text-dark" name="lastname" id="lname" placeholder="Last Name" maxlength="9">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>A.Y.</label>
                                    <select class="form-control text-dark" name="acadyears" id="ay" style="padding: 17px">
                                        @if($acadyears = App\Models\Academicyear::get())
                                            @foreach($acadyears as $acadyear)
                                                <option value="{{ $acadyear->academicyear }}">{{ $acadyear->academicyear }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select class="form-control text-dark" name="semester" id="semester" style="padding: 17px">
                                      <option value="1">1st</option>
                                      <option value="2">2nd</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                      <button type="submit" class="btn btn-gradient-primary me-2, mt-4" style="padding: 10px">Search</button>
                    </form>
                </div>
            </div>
      	</div>
      </div>
       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($data))
                            @foreach($data as $value)
                                <tr>
                                    <td>{{ $value['idnumber'] }}</td>
                                    <td>{{ $value['first_name'] }}</td>
                                    <td>{{ $value['last_name'] }}</td>
                                    <td>{{ $value['course']['course'] }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('payment_billings',['id'=> $value['id'], 'academicyear'=>$value['academicyear'],'semester'=> $value['semester'] ]) }}">View</a></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
  </div>
@endsection
