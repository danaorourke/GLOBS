@extends('layouts.app')

@section('title')
{{ $shop->name }}
@endsection

@section('content')
  <div class="container">
    <div class="card m-3">
      <h1 class="card-header">{{ $shop->name }}</h1>
      <div class="card-body">        
          @if ($shop->items->count() === 0)
          <p>No products found.</p>
          @endif

          @foreach ($shop->items as $item)
            <div class="card m-3">
              <h4 class="card-header">{{ $item->name }}</h4>
              <div class="card-body">
                <p>{{ $item->description }}</p>
              </div>
            </div>
          @endforeach
      </div>
    </div>
  </div>
@endsection