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
            <div class="container bg-primary">
                <div class="page-header">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb"></ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                          <div class="card">
                                <div class="card-body">
                                    <form class="form-sample" action="{{ route('payment.search')}}">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="text-dark">ID Number: <b>{{ $data['student']['idnumber'] }}</b></label>
                                                    <label>Full Name: <b>{{ $data['student']['last_name'] }}, {{ $data['student']['first_name'] }}</b></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Course: <b>{{ $data['student']['course']['course'] }}</b></label>
                                                    <label>Year: <b>{{ $data['student']['year'] }}</b></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="text-dark">Section: <b>{{ $data['student']['section'] }}</b></label><br>
                                                    <label class="text-dark">Gender: <b>{{ $data['student']['gender'] }}</b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>EVENTS</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Penalty(Hours)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['events'] as $event)
                                            <tr>
                                                <td>{{ $event['name'] }}</td>
                                                <td>
                                                    @foreach($data['attendances'] as $attendance)
                                                        @if($attendance['event_id'] == $event['id'] && $attendance['status'] == 'login')
                                                            {{__('Present')}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($data['attendances'] as $attendance)
                                                        @if($attendance['event_id'] == $event['id'] && $attendance['status'] == 'logout')
                                                            {{__('Present')}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{ $event['total_hours'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection