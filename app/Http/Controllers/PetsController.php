<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\Pet;

class PetsController extends Controller
{
  public function index() {
    $user = Auth::user();
    return view('pets/list',compact('user'));
  }
  
  public function add() {
    return view('pets/add');
  }
  
  public function create(Request $request) {
    
    // validation rules
    $validatedData = $request->validate([
      'name' => 'required|max:255',
      'health' => 'required|numeric|between:5,10',
      'defense' => 'required|numeric|between:5,10',
      'attack' => 'required|numeric|between:5,10',
      'speed' => 'required|numeric|between:5,10',
      'stamina' => 'required|numeric|between:5,10',
      'accuracy' => 'required|numeric|between:5,10'
    ]);
    
    // check for count of stats
    $sum = 0;
    $sum = $validatedData['health'] + $validatedData['defense'] + $validatedData['attack'] + $validatedData['speed'] + $validatedData['stamina'] + $validatedData['accuracy'];
    if ($sum !== 40) {
      return back()->withInput()->withErrors(array('Stats total must equal 40.'));
    }
    
    // set up the pet from the response
    $pet = new Pet();

    $pet->name = $validatedData['name'];
    $pet->user_id = Auth::id();
    
    $pet->health = $validatedData['health'];
    $pet->defense = $validatedData['defense'];
    $pet->attack = $validatedData['attack'];
    $pet->speed = $validatedData['speed'];
    $pet->stamina = $validatedData['stamina'];
    $pet->accuracy = $validatedData['accuracy'];
    
    $pet->save();
  }
  
}