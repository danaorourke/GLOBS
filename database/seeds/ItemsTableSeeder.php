<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items')->insert(
        [
          'name' => 'GeneroLabs Slime Chow',
          'description' => 'The most generic of foodstuffs. While not fit for human consumption, it seems to fulfill the basic needs of the average slime.'
        ]
      );
    }
}
