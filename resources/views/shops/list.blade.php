@extends('layouts.app')

@section('title')
All Shops
@endsection

@section('content')

  @if ($shops->count() === 0)
    <p>No shops are available.</p>
  @endif
  
  <div class="container">
    <div class="card m-3">
      <h1 class="card-header">All Shops</h1>
      <div class="card-body">
        @foreach($shops as $shop)
          <div class="card m-3">
            <h3 class="card-header">{{ $shop->name }}</h3>
            <div class="card-body">
              <p>{{ $shop->description }}</p>
              
              <a href="/shops/{{ $shop->id }}" class="btn btn-primary btn-block">View Catalogue</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection