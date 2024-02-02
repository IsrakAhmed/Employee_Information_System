@extends('layout', ['title'=> 'Home'])

@section('page-content')
    <div class="row">
        <div class="col-lg-10">
            <form  action="{{ route('employee.index') }}" method="GET" >
                <div class="form-row">
                    <div class="col-8">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search"
                               value="{{ request('search') }}">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-default">Search</button>

                    </div>
                </div>
            </form>

        </div>

        <div class="col-lg-2">
            <p class="text-right"><a href="{{route('employee.create')}}" class="btn btn-primary">New Employee</a></p>
        </div>
    </div>

    <table class="table table-striped table-bordered">

        <th>ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Joining Date</th>
        <th>E-Mail</th>

        <th colspan="3" class="text-center">Action</th>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->job_title}}</td>
                <td>{{$employee->joining_date}}</td>
                <td>{{$employee->email}}</td>
                <td>
                    <a href="{{route('employee.show',$employee->id)}}">View</a>
                </td>
                <td>
                    <a href="{{route('employee.edit',$employee->id)}}">Edit</a>
                </td>

                <td>
                    <form  method="post" action="{{route('employee.destroy',$employee)}}" onsubmit="return confirm('Sure?')">
                        @csrf
                        @method('DELETE')
                        <input type="submit" style="padding: 0; margin: 0" value="Delete" class="btn btn-link text-danger"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>

    {{ $employees->withQueryString()->links() }}

@endsection
