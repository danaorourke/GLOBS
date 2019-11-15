<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  protected $fillable = [
    "name",
    "description"
  ];
  
  public function items() {
    return $this->belongsToMany('App\Item');
  }
}
