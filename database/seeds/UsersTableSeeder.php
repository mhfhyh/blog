<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ( $i=0;$i<51;$i++) {
           DB::table('users')->insert([
               'name' => str_random(10),
               'phone' => '05' . substr(str_shuffle("0123456789"), 0, 8),
               'email' => str_random(8) . '@gmail.com',
               'username' => str_random(10),
               'id' => '1' . substr(str_shuffle("0123456789"), 0, 9),
           ]);

           DB::table('users2')->insert([
               'name' => str_random(10),
               'phone' => '05' . substr(str_shuffle("0123456789"), 0, 8),
               'email' => str_random(8) . '@gmail.com',
               'username' => str_random(10),
               'id' => '1' . substr(str_shuffle("0123456789"), 0, 9),
           ]);

           DB::table('users3')->insert([
               'name' => str_random(10),
               'phone' => '05' . substr(str_shuffle("0123456789"), 0, 8),
               'email' => str_random(8) . '@gmail.com',
               'username' => str_random(10),
               'id' => '1' . substr(str_shuffle("0123456789"), 0, 9),
           ]);

           DB::table('users4')->insert([
               'name' => str_random(10),
               'phone' => '05' . substr(str_shuffle("0123456789"), 0, 8),
               'email' => str_random(8) . '@gmail.com',
               'username' => str_random(10),
               'id' => '1' . substr(str_shuffle("0123456789"), 0, 9),
           ]);

       }

    }
}
