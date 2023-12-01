@extends('layouts.default')

@section('content')
	<div class="content-wrapper">
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
                    <form class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputEmail3" class="text-dark">ID Number</label>
                        <input type="string" class="form-control text-dark" id="idnum" placeholder="ID No." maxlength="9">
                      </div>
                      <div class="form-group">
                        <label>Year Level</label>
                        <select class="form-control text-dark" style="padding: 17px" id="courses">
                          <option>1st Year</option>
                          <option>2nd Year</option>
                          <option>3rd Year</option>
                          <option>4th Year</option>
                          <option>Irregular</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>S.Y.</label>
                        <select class="form-control text-dark" id="s.y." style="padding: 17px">
                          <option>2019-2020</option>
                          <option>2020-2021</option>
                          <option>2021-2022</option>
                          <option>2022-2023</option>
                          <option>2023-2024</option>
                        </select>
                      </div>
                      <div>
                        <label>Semester</label>
                        <select class="form-control text-dark" id="semester" style="padding: 17px">
                          <option>1st</option>
                          <option>2nd</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2, mt-4" style="padding: 10px">Search</button>
                    </form>
                  </div>
                </div>
      	</div>
      </div>
  </div>
@endsection
