@extends('layouts.app')

@section('title')
List All Pets
@endsection

@section('content')
  @if (Auth::check())
    <div class="container">
      
      <div class="card">
        <h1 class="card-header">My Pets</h1>
        <div class="card-body">
          
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
          
          @if ($user->pets->count() === 0 )
            <p>No pets are available.</p>
          @endif
          
          @foreach($user->pets as $pet)
            
            <div class="card m-3">
              <h3 class="card-header">{{ $pet->name }} <a href="pets/release/{{ $pet->id }}" class="btn btn-outline-secondary" style="float: right;" alt="Delete">X</a></h3>
              <div class="card-body">
                <ul class="list-group m-3">
                  <li class="list-group-item">
                    <span>Health:</span> {{ $pet->health }}
                  </li>
                  <li class="list-group-item">
                    <span>Stamina:</span> {{ $pet->stamina }}
                  </li>
                  <li class="list-group-item">
                    <span>Attack:</span> {{ $pet->attack }}
                  </li>
                  <li class="list-group-item">
                    <span>Defense:</span> {{ $pet->defense }}
                  </li>
                  <li class="list-group-item">
                    <span>Speed:</span> {{ $pet->speed }}
                  </li>
                  <li class="list-group-item">
                    <span>Accuracy:</span> {{ $pet->accuracy }}
                  </li>
                </ul>
              </div>
            </div>
            
          @endforeach
          
          <hr class="m-3">
          <p><a href="/pets/adopt" class="btn btn-primary btn-block btn-lg">Adopt a new pet.</a></p>

          
        </div>        
      </div>
      
    </div>
  @else
    <p> Log in required.</p>
  @endif
@endsection