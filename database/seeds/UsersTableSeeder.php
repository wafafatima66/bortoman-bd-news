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
        App\User::create([
            'name' => 'Rasel Ahmed',
            'email' => 'rasel@ahmed.net',
            'password' => bcrypt('password')
        ]);
    }
}
