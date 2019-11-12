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
             <form method="POST">
                <div class="form-group row">
                  <label for="slimeName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="slimeName">
                  </div>
                </div>
                
                <hr style="margin:40px 0;">
                <div class="form-group row">
                  <label for="health" class="col-sm-2 col-form-label">Health</label>
                  <div class="col-sm-4">
                    <input id="health" type="number" class="form-control stat" value="5" min="5" max="10">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="defense" class="col-sm-2 col-form-label">Defense</label>
                  <div class="col-sm-4">
                    <input id="defense" type="number" class="form-control stat" value="5" min="5" max="10">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="attack" class="col-sm-2 col-form-label">Attack</label>
                  <div class="col-sm-4">
                    <input id="attack" type="number" class="form-control stat" value="5" min="5" max="10">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="speed" class="col-sm-2 col-form-label">Speed</label>
                  <div class="col-sm-4">
                    <input id="speed" type="number" class="form-control stat" value="5" min="5" max="10">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stamina" class="col-sm-2 col-form-label">Stamina</label>
                  <div class="col-sm-4">
                    <input id="stamina" type="number" class="form-control stat" value="5" min="5" max="10">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="accuracy" class="col-sm-2 col-form-label">Accuracy</label>
                  <div class="col-sm-4">
                    <input id="accuracy" type="number" class="form-control stat" value="5" min="5" max="10">
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
                {{ csrf_field() }}
              </form>
              <pets-add></pets-add>
          </div>
        </div>
    </div>
  @else
    <p> Log in required.</p>
  @endif
@endsection