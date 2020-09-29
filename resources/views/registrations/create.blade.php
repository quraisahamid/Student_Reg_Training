@extends('layouts.master')

@section('content')
<div class="card m-5">
    <div class="card-header">
      New Registration
    </div>
    <div class="card-body">
        @if(session()->has('message') && session()->get('status'))
        <div class="alert alert-success" role="alert">
            Success
           </div>
        @endif      
    <form action="{{route('registrations.store')}}" method="POST">
        @csrf
                <div class="form-group">
                    <label >Full Name</label>
                    <input name="full_name" class="form-control" required >
                </div>
                <div class="form-group">
                    <label >IC Number</label>
                    <input name="ic_number" class="form-control"  required>
                </div>
                <div class="form-group" >
                    <label name="dob" >Date Of Birth</label>
                    <input type="date" name="dob" class="form-control"  required>
                </div>
                <div class="form-group">
                <label >Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="" disabled selected>Please Select Your Gender</option>
                    @foreach ($genders as $gender)
                    <option value="{{$gender->id}}">{{$gender->name}}</option>  
                    @endforeach                  
                </select>
                </div>
                <div class="form-group">
                    <label >Race</label>
                    <select name="race" class="form-control" required>
                        <option value="" disabled selected>Please Select Your Race</option>
                        @foreach ($races as $race)
                        <option value ={{$race->id}}>{{$race->name}}</option>  
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label >Religion</label>
                    <select name="religion" class="form-control" required>
                        <option value="" disabled selected>Please Select Your Religion</option>
                        @foreach ($religions as $religion)
                        <option value = {{$religion->id}}>{{$religion->name}}</option>  
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label >School</label>
                    <select name="school" class="form-control"  required>
                        <option value="" disabled selected>Please Select Your School</option>
                        @foreach ($schools as $school)
                        <option value = {{$school->id}}>{{$school->name}}</option>  
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary align-right">Submit</button>
          </form>
    </div>
  </div>
@endsection