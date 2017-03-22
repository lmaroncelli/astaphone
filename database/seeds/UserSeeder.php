<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
     DB::table('users')->delete();
       
     User::create(array(
                 'email' => 'lmaroncelli@gmail.com',
                 'password' => bcrypt('Labietta0'),
                 'name' => 'Luigi Maroncelli',
                 'ruolo' => 'admin'
             ));

    }
}
