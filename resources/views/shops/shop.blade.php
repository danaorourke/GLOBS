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
          @else
            
            <form method="post" action="/shops/{{$shop->id}}/order" accept-charset="UTF-8">
          
            @foreach ($shop->items as $item)
              <div class="card m-3">
                <h4 class="card-header">{{ $item->name }}</h4>
                <div class="card-body ">
                  <p>{{ $item->description }}</p>
                  <div class="row">
                    <label for="{{$item->name}}" class="col-sm-2 col-form-label">Qty:</label>

                    {!! Form::number($item->id, '0', [ 'class' => 'form-control col-sm-2'] ) !!}
                   
                    <span class="col-form-label ml-4">{{$item->price}} ea.</span>
                  </div>
                </div>
              </div>
            @endforeach
            
            <button type="submit" class="btn btn-primary m-3">Confirm Order</button>
              
            {{ csrf_field() }}
            </form>
          @endif
      </div>
    </div>
  </div>
@endsection