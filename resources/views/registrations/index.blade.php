@extends('layouts.app')

@section('content')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Full Name</th>
        <th scope="col">IC Number</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Race</th>
        <th scope="col">Religion</th>
        <th scope="col">School</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($registrations as $registration)
    <tr>
        <th scope="row">1</th>
        <td>{{$registration['student']['full_name']}}</td>
        <td>{{$registration['student']['ic_number']}} </td>
        <td>{{$registration['student']['dob']}} </td>
        <td>{{$registration->student->gender->name}}</td>
        <td>{{$registration->student->race->name}}</td>
        <td>{{$registration->student->religion->name}}</td>
        <td>{{$registration->school->name}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Approved</button>
                <button type="button" class="btn btn-danger">Rejected</button>
                
              </div>
        </td>
      </tr>
    @endforeach    
    </tbody>
  </table>
    
@endsection