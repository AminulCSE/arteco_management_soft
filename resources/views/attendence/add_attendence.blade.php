@extends('layouts.app')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Employee Attendance</h4>
                                    <span>Employee Attendance here.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <button class="btn btn-primary">
                                            <a href="{{ URL::to('attendence/all') }}" style="color: white;">All Attendence</a>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>

                                @elseif(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif

                                <h3 style="color: green;">Today: {{ date('d-M-Y') }}</h3>
                            </div>

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <form action="{{ URL::to('attendence/store') }}" method="POST">
                                        @csrf
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sl.</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    {{-- <th>Position</th> --}}
                                                    <th>Hour Duty</th>
                                                    <th>Overtime</th>
                                                    <th>Attendence</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i=1; @endphp
                                                @foreach($employee as $employee_row)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $employee_row->name }}</td>
                                                    <td>
                                                        <img src="{{ asset($employee_row->image) }}" style="height: 55px; width: 70px">
                                                    </td>
                                                    {{-- <td>{{ $employee_row->position }}</td> --}}

                                                    <input type="hidden" name="employee_id[]" value="{{ $employee_row->id }}">

                                                    <input type="hidden" name="att_date" value="{{ date('d/m/y') }}">

                                                    <input type="hidden" name="att_year" value="{{ date('Y') }}">

                                                    <input type="hidden" name="att_month" value="{{ date('F') }}">

                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Enter hourly duty" name="hourly_duty[{{ $employee_row->id }}]">
                                                    </td>

                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Enter overtime" name="overtime[{{ $employee_row->id }}]">
                                                    </td>

                                                    <td>
                                                        <label for={{ $i }}>Present</label>
                                                        <input id="{{ $i }}" type="radio" value="present" required="" name="attendence[{{ $employee_row->id }}]">

                                                        <label for="{{ $employee_row->id }}">Absent</label>
                                                        <input id="{{ $employee_row->id }}" value="absent" required="" type="radio" name="attendence[{{ $employee_row->id }}]">
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <button class="btn btn-primary float-center" style="margin: 25px" type="submit">Take Attendance</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Basic table card end -->
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->

            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection()