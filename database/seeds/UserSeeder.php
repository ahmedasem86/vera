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
      DB::table('users')->insert([
        'name' => 'ahmed',
        'email' =>'ahmed.asem@code95.com',
        'password' =>bcrypt('Aa123456'),
    ]);
    }
}
