@extends('layout',['title'=>'Show'])

@section('page-content')



    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{$employee->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$employee->name}}</td>
        </tr>
        <tr>
            <th>Job Title</th>
            <td>{{$employee->job_title}}</td>
        </tr>
        <tr>
            <th>Joining Date</th>
            <td>{{$employee->joining_date}}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{$employee->salary}}</td>
        </tr>
        <tr>
            <th>E-Mail</th>
            <td>{{$employee->email}}</td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td>{{$employee->mobile_no}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$employee->address}}</td>
        </tr>
    </table>

    <p class="text-start"><a href="{{route('employee.index')}}" class="btn btn-danger">Back</a></p>
@endsection
