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
          @foreach($user->pets as $pet)
            
            <div class="card">
              <h3 class="card-header">{{ $pet->name }}</h3>
              <div class="cardbody">
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
        </div>
      </div>
    </div>
  @else
    <p> Log in required.</p>
  @endif
@endsection