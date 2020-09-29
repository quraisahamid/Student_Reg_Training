@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                <a href="{{route('registrations.index')}}" class="btn btn-primary btn-sm float-right">Register List</a>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                        <h1 class="card-title"></h1>
                          <p class="card-text">Status Pending.</p>
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h1 class="card-title"></h1>
                          <p class="card-text">Status Approved.</p>
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                            <h1 class="card-title"></h1>
                            <p class="card-text">Status Rejected.</p>
                            
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
