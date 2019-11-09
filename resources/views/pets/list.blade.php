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
            {{$pet->name}}<br>
          @endforeach
        </div>
      </div>
    </div>
  @else
    <p> Log in required.</p>
  @endif
@endsection