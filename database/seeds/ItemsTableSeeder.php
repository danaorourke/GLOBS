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
          [
            'name' => 'GeneroLabs Slime Chow',
            'description' => 'The most generic of foodstuffs. While not fit for human consumption, it seems to fulfill the basic needs of the average slime.',
            'price' => 10.00
          ],
          [
            'name' => 'GeneroLabs Blueing Agent',
            'description' => 'Guaranteed to develop the blue hue of your slime. Made from fruit.',
            'price' => 50.00
          ],
          [
            'name' => 'GeneroLabs Redding Agent',
            'description' => 'Made from beetles, this powdered crumble develops the red hue of your slimes.',
            'price' => 50.00
          ],
          [
            'name' => 'GeneroLabs Yellowing Agent',
            'description' => 'Made from powered onion skins, this yellowing agent will help your slime shine like a buttercup.',
            'price' => 50.00
          ]
        ]
      );
    }
}
