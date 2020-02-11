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
            
            <form method="post" actions="/shops/{{$shop->id}}/order" accept-charset="UTF-8">
          
            @foreach ($shop->items as $item)
              <div class="card m-3">
                <h4 class="card-header">{{ $item->name }}</h4>
                <div class="card-body ">
                  <p>{{ $item->description }}</p>
                  <div class="row">
                    <label for="{{$item->name}}" class="col-sm-2 col-form-label">Qty:</label>
                    <input type="number" min="0" id="{{$item->name}}" class="form-control col-sm-2">
                    
                    <span>0.00</span> @ <span></span>
                  </div>
                </div>
              </div>
            @endforeach


            {{ csrf_field() }}

            </form>
          @endif
      </div>
    </div>
  </div>
@endsection