@extends('layout', ['title'=> 'Edit'])

@section('page-content')
    <legend>Update Employee</legend>
    <form method="post" action="{{route('employee.update',$employee)}}">

        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{$employee->id}}">

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name',$employee->name)}}" id="name" name="name" placeholder="Name">
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            </div>

        </div>

        <div class="form-group">
            <label for="job_title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('job_title') is-invalid @enderror" value="{{old('job_title',$employee->job_title)}}" id="job_title" name="job_title" placeholder="Job Title">
                <div class="invalid-feedback">{{$errors->first('job_title')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="joining_date" class="col-sm-2 control-label">Joining Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control @error('joining_date') is-invalid @enderror" value="{{old('joining_date',$employee->joining_date)}}" id="joining_date" name="joining_date" placeholder="Joining Date">
                <div class="invalid-feedback">{{$errors->first('joining_date')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="salary" class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
                <input type="number" class="form-control @error('salary') is-invalid @enderror" value="{{old('salary',$employee->salary)}}" id="salary" name="salary" placeholder="Salary">
                <div class="invalid-feedback">{{$errors->first('salary')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email',$employee->email)}}" id="email" name="email" placeholder="E-Mail">
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control @error('mobile_no') is-invalid @enderror" value="{{old('mobile_no',$employee->mobile_no)}}" id="mobile_no" name="mobile_no" placeholder="Mobile No">
                <div class="invalid-feedback">{{$errors->first('mobile_no')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{old('address',$employee->address)}}" id="address" name="address" placeholder="Address">
                <div class="invalid-feedback">{{$errors->first('address')}}</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{route('employee.index')}}" class="btn btn-danger"> <i class="bi bi-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>


@endsection



