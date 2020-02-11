<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shops')->insert(
        [
          'name' => 'Plethora Provisions',
          'description' => 'Plethora Provisions sells all manner of foodstuffs for the discerning pet owner.',
          'multiplier' => 1
        ]
      );
    }
}
