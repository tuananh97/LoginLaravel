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
        DB::table('users')->truncate();
        App\User::create([
            'name' =>'Cu',
            'email'=>"aa@gmail.com",
            'password'=>bcrypt(12345678)
        	]);
      
        App\User::insert([
            'name' =>'Cuanh',
            'email'=>"bb@gmail.com",
            'password'=>bcrypt(12345678)
        	]);
    }
}
