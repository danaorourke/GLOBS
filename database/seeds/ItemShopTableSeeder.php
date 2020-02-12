<?php

use Illuminate\Database\Seeder;

class ItemShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('item_shop')->insert(
        [
          ['shop_id' => 1, 'item_id' => 1],
          ['shop_id' => 1, 'item_id' => 2],
          ['shop_id' => 1, 'item_id' => 3],
          ['shop_id' => 1, 'item_id' => 4]
        ]
      );
    }
}
