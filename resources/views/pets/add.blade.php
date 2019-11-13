@extends('layouts.app')

@section('title')
Adopt New Slime
@endsection

@section('content')
  @if (Auth::check())
    <div class="container">
        <div class="card">
          <h1 class="card-header">Adopt New Slime</h1>
          <div class="card-body">
            
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
                
            {!! Form::open(['url' => 'pets/adopt']) !!}
                <div class="form-group row">
                  {!! Form::label('name', 'Slime Name', ['class' => 'col-sm-2 col-form-label']) !!}
                  <div class="col-sm-10">
                    {!! Form::text('name', '', [ 'class' => 'form-control' ]) !!}
                  </div>
                </div>
                
                <hr style="margin:40px 0;">
                <div class="form-group row">
                  {!! Form::label('health', 'Health', [ 'class' => 'col-sm-2 col-form-label' ]) !!}
                  <div class="col-sm-4">
                    {!! Form::number('health', '5', [ 'class' => 'form-control stat', 'min' => 5, 'max' => 10 ] ) !!}
                  </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('defense', 'Defense', [ 'class' => 'col-sm-2 col-form-label', 'min' => 5, 'max' => 10 ] ) !!}
                  <div class="col-sm-4">
                    {!! Form::number('defense', '5', [ 'class' => 'form-control stat', 'min' => 5, 'max' => 10 ] ) !!}
                  </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('attack', 'Attack', [ 'class' => 'col-sm-2 col-form-label' ] ) !!}
                  <div class="col-sm-4">
                    {!! Form::number('attack', '5', [ 'class' => 'form-control stat', 'min' => 5, 'max' => 10 ] ) !!}
                  </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('speed', 'Speed', [ 'class' => 'col-sm-2 col-form-label' ] ) !!}
                  <div class="col-sm-4">
                    {!! Form::number('speed', '5', [ 'class' => 'form-control stat', 'min' => 5, 'max' => 10 ] ) !!}
                  </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('stamina', 'Stamina', [ 'class' => 'col-sm-2 col-form-label' ] ) !!}
                  <div class="col-sm-4">
                    {!! Form::number('stamina', '5', [ 'class' => 'form-control stat', 'min' => 5, 'max' => 10 ] ) !!}
                  </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('accuracy', 'Accuracy', [ 'class' => 'col-sm-2 col-form-label' ] ) !!}
                  <div class="col-sm-4">
                    {!! Form::number('accuracy', '5', [ 'class' => 'form-control stat', 'min' => 5, 'max' => 10 ] ) !!}
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="pointsTotal" class="col-sm-2 col-form-label" id="pointsTotalLabel">Points Total</label>
                  <div class="col-sm-4 input-group">
                    <input id="pointsTotal" type="text" readonly class="form-control-plaintext" value="30">
                    <div class="input-group-append">
                      <span class="input-group-text">/</span>
                      <span class="input-group-text">40</span>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="submitPet">Adopt Pet</button>
                </div>
            {!! Form::close() !!}
              <pets-add></pets-add>
          </div>
        </div>
    </div>
  @else
    <p> Log in required.</p>
  @endif
@endsection