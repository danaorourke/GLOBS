@extends('layouts.app')

@section('title')
{{ $shop->name }}
@endsection

@section('content')
  <div class="container">
    <div class="card m-3">
      <h1 class="card-header">{{ $shop->name }}</h1>
      <div class="card-body">
      </div>
    </div>
  </div>
@endsection