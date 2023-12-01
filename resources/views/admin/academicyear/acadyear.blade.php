        @extends('layouts.default')

        @section('content')
        	<div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title">
                </h3>
                <nav aria-label="breadcrumb">
                  <ul class="breadcrumb">
                  </ul>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                	<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Academic Year</h4>
                    <table class="table table-hover">
                      @if($academicyear = App\Models\AcademicYear::get())
                        @foreach($academicyear as $acadyear)
                        <option value="{{ $academicyear}}"> {{ $academicyear->acadyear }} </option>
                        @endforeach
                      @endif
                      <thead>
                        <tr>
                          <th>ID No.</th>
                          <th>Academic Year</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>{{ $academicyear }}</th>
                          <th></th>                 
                        </tr>
                      </tbody>
                      <button type="submit" class="btn btn-primary" style="padding: 10px">Add</button>
                    </table>
                  </div>                   
                </div>
              	</div>
              </div>
          </div>
        @endsection
