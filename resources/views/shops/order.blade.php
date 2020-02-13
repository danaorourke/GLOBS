@extends('layouts.app')

@section('title')
Confirm Order | {{ $shop->name }}
@endsection

@section('content')
  <div class="container">
    <div class="card m-3">
      <h1 class="card-header">Confirmed Order with {{ $shop->name }}</h1>
      
      @foreach ($validatedData as $data => $quantity)
        <p>{{$quantity}} of {{$data}}</p>
      @endforeach
    </div>
  </div>
@endsection