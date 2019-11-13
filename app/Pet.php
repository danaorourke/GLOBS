<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Pet extends Model
{
    protected $fillable = [
      'name',
      'health',
      'defense',
      'attack',
      'speed',
      'stamina',
      'accuracy'
    ];
    
    public function user() {
      return $this->belongsTo(User::class);
    }
}
