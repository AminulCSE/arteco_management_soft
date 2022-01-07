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
                                    <h4>View Employee Attendance</h4>
                                    <span>View Employee Attendance here.</span>
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

                                <h3 style="color: green;">Attendence Date: {{ $get_view_date->edit_date }}</h3>
                            </div>

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
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
                                                @foreach($edit_att as $edit_att_row)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $edit_att_row->name }}</td>
                                                    <td>
                                                        <img src="{{ asset($edit_att_row->image) }}" style="height: 55px; width: 70px">
                                                    </td>
                                                    {{-- <td>{{ $employee_row->position }}</td> --}}



                                                    <input type="hidden" name="id[]" value="{{ $edit_att_row->id }}">

                                                    <input type="hidden" name="att_date" value="{{ $edit_att_row->att_date }}">

                                                    <input type="hidden" name="att_year" value="{{ $edit_att_row->att_year }}">

                                                    <input type="hidden" name="att_month" value="{{ $edit_att_row->att_month }}">

                                                    <td>
                                                        Hourly Duty: {{ $edit_att_row->hourly_duty }}
                                                    </td>

                                                    <td>Overtime: {{ $edit_att_row->overtime }}</td>

                                                    <td>
                                                        <label for={{ $i }}>Present</label>

                                                        <input disabled="" <?php if ($edit_att_row->attendence=='present') {
                                                            echo "checked";
                                                        } ?> id="{{ $i }}" type="radio" value="present" required="" name="attendence[{{ $edit_att_row->id }}]">

                                                        <label for="{{ $edit_att_row->id }}">Absent</label>

                                                        <input disabled="" <?php if ($edit_att_row->attendence=='absent') {
                                                            echo "checked";
                                                        } ?> id="{{ $edit_att_row->id }}" value="absent" required="" type="radio" name="attendence[{{ $edit_att_row->id }}]">
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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