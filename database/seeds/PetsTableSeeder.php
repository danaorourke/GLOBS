<?php
  use Illuminate\Database\Seeder;
  
  class PetsTableSeeder extends Seeder
  {
    public function run()
    {
      DB::table('pets')->insert(
        [
          'name' => 'Slime McBlobson',
          'user_id' => 1,
          'health' => 10,
          'defense' => 10,
          'stamina' => 5,
          'attack' => 5,
          'speed' => 5,
          'accuracy' => 5,
          'hunger' => 10
        ]
      );
    }
  }
?>