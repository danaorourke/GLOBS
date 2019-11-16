<?php
  use Illuminate\Database\Seeder;

  class UsersTableSeeder extends Seeder
  {
    public function run()
    {
      DB::table('users')->insert(
        [
          'name' => "Dana O'Rourke",
          'email' => 'dana@cupofteacreations.com',
          'password' => bcrypt('testing123')
        ]
      );
    }  
  }
?>