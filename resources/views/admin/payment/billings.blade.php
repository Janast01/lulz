@extends('layouts.default')

@section('content')
	<div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient- text-white me-2">
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
                                                    <img style="width: 100%;" src="https://ssc.slsubc.com/storage/{{ $data['student']['avatar'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>ID Number: <b>{{ $data['student']['idnumber'] }}</b></label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Full Name: <b>{{ $data['student']['last_name'] }}, {{ $data['student']['first_name'] }}</b></label>
                                                </div>
                                                <div class="form-group">    
                                                    <label>Course: <b>{{ $data['student']['course']['course'] }}</b></label>
                                                </div>  
                                                <div class="form-group">    
                                                    <label>Year: <b>{{ $data['student']['year'] }}</b></label>
                                                </div>

                                                <div class="form-group">   
                                                    <label>Section: <b>{{ $data['student']['section'] }}</b></label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gender: <b>{{ $data['student']['gender'] }}</b></label>
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
                                                <td>
                                                    {{ $event['name'] }}
                                                    <br><div style="width: 30%;">
                                                     {{ \Carbon\Carbon::parse($event['from_date_and_time'])->format('F j g:ia')}} - {{ \Carbon\Carbon::parse($event['to_date_and_time'])->format('F j g:ia')}}
                                                    </div>
                                                </td>
                                                
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
                                                <td>
                                                    @php
                                                        $attendance = collect($data['attendances'])->firstWhere('event_id', $event['id']);
                                                    @endphp
                                                    @if ($attendance)
                                                        <p>0</p>
                                                    @else
                                                        <p>{{ $event['total_hours']}}</p>
                                                    @endif
                                                    
                                                </td>
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