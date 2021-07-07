<?php

 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;

 class DatabaseSeeder extends Seeder
 {

     /**
      * Seed the application's database.
      *
      * @return void
      */
     public function run()
     {
         // Create admin user.
         DB::table('users')->insert([
             'name' => 'admin admin',
             'email' => 'webmaster@gmail.com',
             'password' => Hash::make('Webmaster123'), // Password is for testing purposes only
             'is_admin' => true
         ]);
     }

 }
 