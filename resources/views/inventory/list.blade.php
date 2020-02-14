@extends('layouts.app')

@section('title')
  My Inventory
@endsection

@section('content')
  <div class="container">
    <div class="card m-3">
      <h1 class="card-header">Inventory</h1>
      <div class="card-body">         
          @if ($user->items->count() === 0)  
            <p>There are no items in your inventory.</p>
          @else  
            <div class="row">
            @foreach ($user->items as $item)
              <div class="col-sm-3">
                <div class="card m3">
                  <h4 class="card-header">{{$item->name}}</h4>
                  <div class="card-body">
                    <p>{{$item->description}}</p>
                    <p>Qty: {{$item->pivot->quantity}}</p>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          @endif
      </div>
    </div>
  </div>
@endsection