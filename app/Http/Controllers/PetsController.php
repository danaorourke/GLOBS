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
      return back()->withInput()->withErrors(array('Stats must equal 40.'));
//      return redirect('/pets/adopt', ['POST' => $validatedData ])->with('error', 'Stats must equal 40.');
    }
    
  
/*
    $pet = new Pet();
    
    $pet->name = $request->name;
    $pet->user_id = Auth::id();
    
    $pet->health = $request->health;
    $pet->defense = $request->defense;
    $pet->attack = $request->attack;
    $pet->speed = $request->speed;
    $pet->stamina = $request->stamina;
    $pet->accuracy = $request->accuracy;
    
    $pet->save();
    
*/
/*
      $pet = new Pet();
      $pet->name = $request->slimeName;
      $sum = 0;

      // check that each stat is a number
      if (
        is_numeric($request->health) &&
        is_numeric($request->defense) &&
        is_numeric($request->attack) &&
        is_numeric($request->speed) &&
        is_numeric($request->stamina) &&
        is_numeric($request->accuracy)
      ) {
        // add up the stats
        $sum = (int)$request->health + (int)$request->defense + (int)$request->attack + (int)$request->speed + (int)$request->stamina + (int)$request->accuracy;
        
        if ($sum == 40) {
          if ($request->health >= 5 && $request->health <= 10) { $pet->health = $request->health; }
          if ($request->defense >= 5 && $request->health <= 10) { $pet->defense = $request->defense; }
          if ($request->attack >= 5 && $request->health <= 10) { $pet->attack = $request->attack; }
          if ($request->speed >= 5 && $request->health <= 10) { $pet->speed = $request->speed; }
          if ($request->stamina >= 5 && $request->stamina <= 10) { $pet->stamina = $request->stamina; }
          if ($request->accuracy >= 5 && $request->accuracy <= 10) { $pet->accuracy = $request->accuracy; }
          $pet->user_id = Auth::id();
          
          $pet->save();
          return redirect('/pets')->with('success', 'New Pet Adopted!');
          // return to individual pet profile
        } else {
          return redirect('/pets/adopt');
        }
      } else {
        return redirect('/pets/adopt');
      }
*/
  }
}
