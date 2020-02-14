<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = [
    'name',
    'description'
  ];
    
  public function shops() {
    return $this->belongsToMany('App\Shop');
  }
  
  public function users() {
    return $this->belongsToMany('App\User');
  }
}
