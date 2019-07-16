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
         App\User::create([
             'name' =>  'faric' ,
             'email' =>  'faric@gmail.com' ,
             'password' =>  bcrypt('12345678')
         ]);

         App\User::create([
             'name' =>  'duren' ,
             'email' =>  'duren@gmail.com' ,
             'password' =>  bcrypt('duren123')
         ]);
    }
}
