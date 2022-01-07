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
                                    <h4>All Employee</h4>
                                    <span>You can see all Employee by Paginate</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <button class="btn btn-primary">
                                            <a href="{{ URL::to('employee/add') }}" style="color: white;">Add Employee</a>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->
                    
                    <div class="page-body">
                        <!-- `New` Constructor table start -->
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
                                @endif
                                <h5>All Employee</h5>
                                <span>Here are all employees of Arteco Metallic</span>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="new-cons" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Sl.</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Position</th>
                                                <th>Salary</th>
                                                <th>Image</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @foreach($employee_data as $employee_row)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $employee_row->name }}</td>
                                                <td>{{ $employee_row->phone }}</td>
                                                <td>{{ $employee_row->position }}</td>
                                                <td>{{ $employee_row->salary }}</td>
                                                <td>
                                                    <img src="{{ asset($employee_row->image) }}" style="height: 100px; width: 100px">
                                                </td>
                                                <td>{{ $employee_row->email }}</td>
                                                <td>{{ $employee_row->address }}</td>
                                                <td>{{ $employee_row->start_date }}</td>
                                                <td>
                                                    <button class="btn btn-primary">
                                                        <a href="{{ URL::to('employee/edit/'.$employee_row->id) }}">Edit</a>
                                                    </button>
                                                    <button class="btn btn-warning">
                                                        <a onclick="return confirm('Are you sure to delete the data??')" href="{{ URL::to('employee/delete/'.$employee_row->id) }}">Delete</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <style type="text/css">
                                        a{color: white;}
                                    </style>
                                </div>
                            </div>
                        </div>
                        <!-- `New` Constructor table end -->
                    </div>
                </div>
            </div>
            <!-- Warning Section Starts -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>
@endsection()