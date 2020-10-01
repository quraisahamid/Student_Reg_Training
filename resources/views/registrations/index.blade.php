@extends('layouts.app')

@section('content')

<div class="m-5">
  @if(session()->has('message') && session()->get('status'))
  <div class="alert alert-success" role="alert">
      Success
     </div>
  @endif  

    <table class="table table-bordered table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Full Name</th>
            <th scope="col">IC Number</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Race</th>
            <th scope="col">Religion</th>
            <th scope="col">School</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($registrations as $registration)
        <tr>
            <th scope="row">{{$registration['student']['id']}}</th>
            <td>{{$registration['student']['full_name']}}</td>
            <td>{{$registration['student']['ic_number']}} </td>
            <td>{{$registration['student']['dob']}} </td>
            <td>{{$registration->student->gender->name}}</td>
            <td>{{$registration->student->race->name}}</td>
            <td>{{$registration->student->religion->name}}</td>
            <td>{{$registration->school->name}}</td>
            <td>
              {{-- @if ($registration->status->$id) --}}
            <span class="badge badge-{{$registration->status->id == \App\Registration::STATUS_PENDING ? 'warning' : ($registration->status->id ==\App\Registration::STATUS_ACCEPTED ?'success': 'danger')}}">{{$registration->status->name}}</span>
              {{-- @endif              --}}
            </td>
            <td>
              @if ($registration->status->id == \App\Registration::STATUS_PENDING)
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{route('registration.approve', $registration->id)}}" class="btn btn-success">Approved</a>
                  <a href="{{route('registration.reject', $registration->id)}}" class="btn btn-danger">Reject</a>                 
                </div>
              @endif
              <a href="{{route('registration.edit', $registration->student->id)}}" class="btn btn-primary"> Update Detail</a>     
            </td>
          </tr>
        @endforeach    
        </tbody>
      </table>
</div>  
@endsection