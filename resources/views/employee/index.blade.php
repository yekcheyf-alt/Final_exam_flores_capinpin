@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="{{ route('employee.create') }}" class="btn btn-info">Add New Employee</a> <br> <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                            <th>Contact Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employee as $employees)
                                        <tr>
                                            <td>{{ $employees->id }}</td>
                                            <td>{{ $employees->fname }}</td>
                                            <td>{{ $employees->lname }}</td>
                                            <td>{{ $employees->mname }}</td>
                                            <td>{{ $employees->address }}</td>
                                            <td>{{ $employees->date_of_birth }}</td>
                                            <td>{{ $employees->contact_number }}</td>
                                            
                                            <td> 
                                                <a href="{{ route('employee.edit', $employees->id) }}" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
                                                <a href="{{ route('employee.destroy', $employees->id) }}" class="btn btn-danger btn-md active" role="button" aria-pressed="true">Delete</a>
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
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection