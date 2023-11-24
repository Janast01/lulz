@extends('layouts.default')

@section('content')
	<div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> {{ $pagetitle }}
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	 <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Department of InfoTEch</h4>
                    <form class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputEmail3">ID Number</label>
                        <input type="string" class="form-control" id="idnum" placeholder="ID No." maxlength="9">
                      </div>
                      <div class="form-group">
                        <label>Courses</label>
                        <select class="form-control" id="courses">
                          <option>Bachelor of Science in InfoTech</option>
                          <option>Bachelor of Science in Agriculture</option>
                          <option>Bachelor of Science in AgroTech</option>
                          <option>Bachelor of Science in Fisheries</option>
                          <option>Bachelor of Science in Marine Biology </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>S.Y.</label>
                        <select class="form-control" id="s.y.">
                          <option>2019-2020</option>
                          <option>2020-2021</option>
                          <option>2021-2022</option>
                          <option>2022-2023</option>
                          <option>2023-2024</option>
                        </select>
                      </div>
                      <div>
                        <label>Semester</label>
                        <select class="form-control" id="semester">
                          <option>1st</option>
                          <option>2nd</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2, mt-4" >Search</button>
                    </form>
                  </div>
                </div>
      	</div>
      </div>
  </div>
@endsection
