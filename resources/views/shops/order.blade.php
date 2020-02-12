@extends('layouts.app')

@section('title')
Confirm Order | {{ $shop->name }}
@endsection

@section('content')
  <div class="container">
    <div class="card m-3">
      <h1 class="card-header">Confirm Order with {{ $shop->name }}</h1>

    </div>
  </div>
@endsection